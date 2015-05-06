<?php

/**
 * Basic HTTP Response object
 * Based on code from Zend Framework 1
 *
 * Converts a raw HTTP Response into a nice clean object for easier code use
 *
 */
class Actionstep_Api_HttpClient_Response {
    private $_statusCode;
    private $_statusText;
    private $_headers;

    public function __construct($responseText) {
        // split status, headers and body
        $this->_statusCode = $this->_parseStatusCodeFromResponseString($responseText);
        $this->_statusText = $this->_parseStatusMessageFromResponseString($responseText);
        $this->_headers = $this->_parseHeadersFromResponseString($responseText);

        $this->_body = $this->_decodeBodyFromResponseString($responseText);
    }

    /**
     * Gets the HTTP Status code, like 200, 404, 500 etc
     * @return int
     */
    public function getStatusCode() {
        return $this->_statusCode;
    }

    /**
     * Gets the HTTP Status code, like "OK" or "File not found"
     * @return string
     */
    public function getStatusText() {
        return $this->_statusText;
    }

    /**
     * Gets a header, like 'Content-Type' (case insensitive)
     *
     * @param string $name
     * @return string|array|null
     */
    public function getHeader($name) {
        $name = strtolower($name);
        if (isset($this->_headers[$name])) {
            return $this->_headers[$name];
        }
        return null;
    }

    /**
     * Gets the main body as a string (already decoded etc)
     *
     * @return string
     */
    public function getBody() {
        return $this->_body;
    }

    /**
     * Rebuild the request with all the decoded vars
     * Makes it a bit easier to read
     *
     * @return string
     */
    public function getDecodedHeadersAndBodyAsString() {
        $return = $this->_statusCode . " " . $this->_statusText . "\r\n";
        foreach ($this->_headers as $name => $value) {
            if (is_array($value)) {
                foreach ($value as $v) {
                    $return .= "{$name}: {$v}\r\n";
                }
            } else {
                $return .= "{$name}: {$value}\r\n";
            }
        }
        $return .= "\r\n";
        $return .= $this->_body;
        return $return;
    }

    private function _decodeBodyFromResponseString($responseText) {
        $body = $this->_parseBodyFromResponseString($responseText);

        if (strtolower($this->getHeader('Transfer-Encoding')) == 'chunked') {
            $body = $this->_decodeChunkedBody($body);
        }

        switch (strtolower($this->getHeader('content-encoding'))) {
            case 'gzip':
                $body = $this->_decodeGzip($body);
                break;

            case 'deflate':
                $body = $this->_decodeDeflate($body);
                break;
        }

        return $body;
    }

     private function _decodeGzip($body) {
        if (!function_exists('gzinflate')) {
            throw new Exception('zlib extension is required in order to decode "gzip" encoding');
        }

        return gzinflate(substr($body, 10));
    }

    private function _decodeDeflate($body) {
        if (!function_exists('gzuncompress')) {
            throw new Exception('zlib extension is required in order to decode "deflate" encoding');
        }

        $zlibHeader = unpack('n', substr($body, 0, 2));
        if ($zlibHeader[1] % 31 == 0) {
            return gzuncompress($body);
        } else {
            return gzinflate($body);
        }
    }

    private function _decodeChunkedBody($body)  {
        $decBody = '';

        if (function_exists('mb_internal_encoding') && ((int) ini_get('mbstring.func_overload')) & 2) {
            $mbIntEnc = mb_internal_encoding();
            mb_internal_encoding('ASCII');
        }

        while (trim($body)) {
            if (! preg_match("/^([\da-fA-F]+)[^\r\n]*\r\n/sm", $body, $matches)) {
                throw new Exception("Error parsing body - doesn't seem to be a chunked message");
            }

            $length = hexdec(trim($matches[1]));
            $cut = strlen($matches[0]);
            $decBody .= substr($body, $cut, $length);
            $body = substr($body, $cut + $length + 2);
        }

        if (isset($mbIntEnc)) {
            mb_internal_encoding($mbIntEnc);
        }
        return $decBody;
    }


    private function _parseHeadersFromResponseString($responseText) {
        $headers = array();

        // First, split body and headers
        $parts = preg_split('|(?:\r?\n){2}|m', $responseText, 2);
        if (!$parts[0]) {
            return $headers;
        }

        // Split headers part to lines
        $lines = explode("\n", $parts[0]);
        unset($parts);
        $lastHeader = null;

        foreach($lines as $line) {
            $line = trim($line, "\r\n");
            if ($line == "") break;

            // Locate headers like 'Location: ...' and 'Location:...' (note the missing space)
            if (preg_match("|^([\w-]+):\s*(.+)|", $line, $matches)) {
                unset($lastHeader);
                $headerName = strtolower($matches[1]);
                $headerValue = $matches[2];

                if (isset($headers[$headerName])) {
                    if (! is_array($headers[$headerName])) {
                        $headers[$headerName] = array($headers[$headerName]);
                    }

                    $headers[$headerName][] = $headerValue;
                } else {
                    $headers[$headerName] = $headerValue;
                }
                $lastHeader = $headerName;
            } elseif (preg_match("|^\s+(.+)$|", $line, $matches) && $lastHeader !== null) {
                if (is_array($headers[$lastHeader])) {
                    end($headers[$lastHeader]);
                    $last_header_key = key($headers[$lastHeader]);
                    $headers[$lastHeader][$last_header_key] .= $matches[1];
                } else {
                    $headers[$lastHeader] .= $matches[1];
                }
            }
        }
        return $headers;
    }

    private function _parseStatusMessageFromResponseString($responseText) {
        preg_match("|^HTTP/[\d\.x]+ \d+ ([^\r\n]+)|", $responseText, $matches);
        if (isset($matches[1])) {
            return $matches[1];
        } else {
            return false;
        }
    }

    private function _parseStatusCodeFromResponseString($responseText) {
        preg_match("|^HTTP/[\d\.x]+ (\d+)|", $responseText, $matches);
        if (isset($matches[1])) {
            return intval($matches[1]);
        } else {
            return false;
        }
    }

    private function _parseBodyFromResponseString($responseText) {
        $parts = preg_split('|(?:\r?\n){2}|m', $responseText, 2);
        if (isset($parts[1])) {
            return $parts[1];
        }
        return '';
    }


}