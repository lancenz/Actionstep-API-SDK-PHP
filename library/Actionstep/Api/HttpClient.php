<?php

/**
 * Basic HTTP Client using CURL
 *
 */
class Actionstep_Api_HttpClient {
    private $_lastRequest=null;
    private $_lastResponse=null;
    private $_method='GET';
    private $_url=null;
    private $_body=null;
    private $_requestFilename=null;
    private $_responseFilename=null;
    private $_headers=array();
    private $_authUser=null;
    private $_authPass=null;
    private $_userAgent=null;

    public function __construct($userAgent) {
        $this->_userAgent = $userAgent;
        $this->reset();
    }

    /**
     * Reset the object so it can be used again
     *
     * @return $this
     */
    public function reset() {
        $this->_headers = array();
        $this->_method  = 'GET';
        $this->_body = null;
        $this->_requestFilename = null;
        $this->_responseFilename = null;
        $this->_authUser = null;
        $this->_authPass = null;
        $this->setHeader('User-Agent', $this->_userAgent);


        return $this;
    }

    /**
     * The RAW HTTP request sent to the server
     *
     * @return null
     */
    public function getLastRequestText() {
        return $this->_lastRequest;
    }

    /**
     * The Decoded HTTP Response received from the server
     *
     * @return null
     */
    public function getLastResponseText() {
        return $this->_lastResponse;
    }

    /**
     * Set basic HTTP Authentication
     *
     * @param $username
     * @param $password
     *
     * @return $this
     */
    public function setAuthBasic($username, $password) {
        $this->_authUser = $username;
        $this->_authPass = $password;
        return $this;
    }

    /**
     * Automatically log the request + decoded response to file, useful for problem solving
     *
     * @param $requestFilename
     * @param $responseFilename
     *
     * @return $this
     */
    public function setDebugFilenames($requestFilename, $responseFilename) {
        $this->_requestFilename  = $requestFilename;
        $this->_responseFilename = $responseFilename;
        return $this;
    }

    /**
     * Sets the request body (as a string)
     *
     * @param $body
     *
     * @return $this
     */
    public function setRequestBody($body) {
        $this->_body = $body;
        return $this;
    }

    /**
     * Send the request and return a response object
     *
     * @return Actionstep_Api_HttpClient_Response
     * @throws Exception
     */
    public function send() {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->_url);
        curl_setopt($curl, CURL_HTTP_VERSION_1_1, true);
        curl_setopt($curl, CURLOPT_HEADER, true);
        curl_setopt($curl, CURLINFO_HEADER_OUT, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        if (!empty($this->_authUser)) {
            curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($curl, CURLOPT_USERPWD, urlencode($this->_authUser).":".urlencode($this->_authPass));
        }


        if (strpos( $_SERVER['HTTP_HOST'], '-dev.actionstep.com') !== false) {
            curl_setopt($curl, CURLOPT_COOKIE, "cb=". $_COOKIE['cb']);
        }

        $curlMethodValue = true;
        switch ($this->_method) {
            case 'GET':     $curlMethod = CURLOPT_HTTPGET; break;
            case 'POST':    $curlMethod = CURLOPT_POST; break;
            case 'PUT':     $curlMethod = CURLOPT_CUSTOMREQUEST; $curlMethodValue = 'PUT'; break;
            case 'DELETE':  $curlMethod = CURLOPT_CUSTOMREQUEST; $curlMethodValue = 'DELETE'; break;
            default:
                throw new Exception("Unknown HTTP method [{$this->_method}]");
        }
        curl_setopt($curl, $curlMethod, $curlMethodValue);

        $headers = array();
        foreach ($this->_headers as $name => $value) {
            $headers[] = "{$name}: {$value}";
        }

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        switch ($this->_method) {
            case 'POST':
            case 'PUT':
                curl_setopt($curl, CURLOPT_POSTFIELDS, $this->_body);
                break;
        }
        $rawResponse = curl_exec($curl);
        // cURL automatically decodes chunked-messages, this means we have to disallow the Zend_Http_Response to do it again
        if (stripos($rawResponse, "Transfer-Encoding: chunked\r\n")) {
            $rawResponse = str_ireplace("Transfer-Encoding: chunked\r\n", '', $rawResponse);
        }

        $this->_lastRequest = curl_getinfo($curl, CURLINFO_HEADER_OUT) . "\n" . $this->_body;

        $response = new Actionstep_Api_HttpClient_Response($rawResponse);
        $this->_lastResponse = $response->getDecodedHeadersAndBodyAsString();

        if (!empty($this->_requestFilename)) {
            file_put_contents($this->_requestFilename, $this->_lastRequest);
        }
        if (!empty($this->_responseFilename)) {
            file_put_contents($this->_responseFilename, $this->_lastResponse);
        }

        $this->reset();
        return $response;
    }


    /**
     * Sets a HTTP Header
     *
     * @param $name
     * @param $value
     *
     * @return $this
     */
    public function setHeader($name, $value) {
        $this->_headers[$name] = $value;
        return $this;
    }

    /**
     * Sets an array of HTTP Headers
     *
     * @param array $nameValuePairs
     * @return $this
     */
    public function setHeaders($nameValuePairs=array()) {
        foreach ($nameValuePairs as $name => $value) {
            $this->setHeader($name, $value);
        }
        return $this;
    }

    /**
     * Set the URL (https://www.xyz.com/file.name)
     *
     * @param $url
     *
     * @return $this
     */
    public function setUrl($url) {
        $this->_url = $url;
        return $this;
    }

    /**
     * Sets the HTTP Method: GET,POST,PUT,DELETE etc
     * Note: POST is INSERT and PUT is for UPDATE
     *
     * @param string $method
     * @return $this
     */
    public function setMethod($method='GET') {
        $this->_method = $method;
        return $this;
    }

    public function getUrl() {
        return $this->_url;
    }
}