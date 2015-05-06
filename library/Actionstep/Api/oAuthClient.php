<?php


class Actionstep_Api_oAuthClient {
    private $_oauthHost='api.actionstep.com';
    private $_oauthAuthorizeEndpoint='/api/oauth/authorize';
    private $_oauthTokenEndpoint='/api/oauth/token';
    private $_clientId;
    private $_clientSecret;
    private $_scope;
    private $_userAgent;

    private $_accessToken=null;

    public function __construct($clientId, $clientSecret, $scope, $userAgent, $oAuthHost=null) {
        if (!empty($oAuthHost)) {
            $this->_oauthHost = $oAuthHost;
        }
        $this->_clientId = $clientId;
        $this->_clientSecret = $clientSecret;
        $this->_scope = $scope;
        $this->_userAgent = $userAgent;

        $this->_loadAccessToken();
        Actionstep_Api_ResourceHelper::getInstance()->setOauthObject($this);
    }

    private function _getAccessTokenFilename() {
        return '/tmp/actionstep.token';
    }

    private function _loadAccessToken() {
        $filename = $this->_getAccessTokenFilename();
        if (file_exists($filename)) {
            $this->_accessToken = file_get_contents($filename);
        } else {
            $this->_accessToken = null;
        }
        return $this;
    }

    public function revokeToken() {
        $this->_clearAccessToken();
        return $this;
    }

    public function isAuthenticated() {
        if ($this->_getAccessToken() === null) {
            return false;
        }
        return true;
    }

    private function _getAccessToken() {
        if ($this->_accessToken === null) {
            $this->_loadAccessToken();
        }

        if ($this->_accessToken === null) {
            return null;
        }
        return $this->_accessToken;
    }

    private function _clearAccessToken() {
        $this->_accessToken = null;
        $filename = $this->_getAccessTokenFilename();
        if (file_exists($filename)) {
            unlink($filename);
        }
    }

    public function redirectUserToAuthenticationUrl($redirectUri=null, $state=null) {
        $this->_clearAccessToken();

        $url = "https://" . $this->_oauthHost . $this->_oauthAuthorizeEndpoint;
        $url .= "?response_type=code";
        $url .= "&client_id=".urlencode($this->_clientId);
        $url .= "&scope=" . urlencode($this->_scope);
        if (!empty($redirectUri)) {
            $url .= "&redirect_uri=" . urlencode($redirectUri);
        }
        if (!empty($state)) {
            $url .= "&state=".urlencode($state);
        }
        header('Location: ' . $url);
        exit;
    }

    public function convertAuthorizationCodeToAccessToken($code, $redirectUri=null) {

        $url = "https://" . $this->_oauthHost . $this->_oauthTokenEndpoint;
        $url .= "?grant_type=authorization_code";
        $url .= "&code=" . urlencode($code);
        if (!empty($redirectUri)) {
            $url .= "&redirect_uri=" . urlencode($redirectUri);
        }

        //$logFilename = date('YmdHis').'oauth.authorization_code';

        $httpClient = new Actionstep_Api_HttpClient($this->_userAgent);
        $httpClient
            //->setDebugFilenames("/tmp/{$logFilename}.request", "/tmp/{$logFilename}.response")
            ->setMethod('POST')
            ->setUrl($url)
            ->setAuthBasic($this->_clientId, $this->_clientSecret);
        $response = $httpClient->send();



        if ($response->getStatusCode() != 200) {
            // we should redirect the user to some sort of "there was a problem, try again later" page here.
            // you should also analyze the response to see what you can do about this, it's an unexpected error.
            throw new Exception("Failed converting authorization code to Access token");
        }

        // test the response
        $body = $response->getBody();
        $tokenData = json_decode($body, true);
        $expectedKeys = array('access_token','expires_in','refresh_token','token_type','api_endpoint');
        foreach ($expectedKeys as $key) {
            if (array_key_exists($key, $tokenData) === false) {
                // Weird! possibly an error actionstep end which didn't change the HTTP status from 200
                // again, redirect user somewhere nice and analyze the response to resolve
                throw new Exception("Response for access token was incorrect, missing access token key: {$key}");
            }
        }

        // now, let's add our own expiry date/time to our token data
        $tokenData['expires_timestamp'] = strtotime('+' . ($tokenData['expires_in'] - 30) . ' seconds');
        $tokenData['scope']             = $this->_scope;
        $this->_setAccessToken(json_encode($tokenData));
        return $this;
    }

    private function _setAccessToken($accessTokenString) {
        $this->_accessToken = $accessTokenString;
        $filename = $this->_getAccessTokenFilename();
        file_put_contents($filename, $this->_accessToken);
        return $this;
    }

    /**
     * @param ActionStep_Api_HttpClient $httpClient
     *
     * @return ActionStep_Api_HttpClient
     * @throws Exception
     */
    public function addAuthenticationToHttpRequest($httpClient) {

        $accessToken = $this->_getAccessToken();
        if ($accessToken ===  null) {
            // redirect user to your "Connect to Actionstep" page
            throw new Exception("Not connected to the Actionstep API!");
        }

        $tokenData = json_decode($accessToken, true);
        if (strtotime('now') >= $tokenData['expires_timestamp']) {
            // renew the token and try again
            $this->refreshAccessToken();
            return $this->addAuthenticationToHttpRequest($httpClient);
        }

        // set the API endpoint correctly.
        $url = $httpClient->getUrl();
        if (substr($url, 0, 1) == '/') {
            $url = substr($url, 1);
        }
        if (substr($url, 0, 4) == 'api/') {
            $url = substr($url, 4);
        }
        $url = $tokenData['api_endpoint'] . $url;

        $httpClient->setUrl($url);
        $httpClient->setHeader('Authorization', 'Bearer ' . $tokenData['access_token']);
        $httpClient->setHeader('X', 'Y');
        return $httpClient;
    }

    public function refreshAccessToken() {
        $accessToken = $this->_getAccessToken();
        if ($accessToken ===  null) {
            // redirect user to your "Connect to Actionstep" page
            throw new Exception("Not connected to the Actionstep API!");
        }

        $tokenData = json_decode($accessToken, true);

        $scope = isset($tokenData['scope']) ? $tokenData['scope'] : $this->_scope;

        $url = "https://" . $this->_oauthHost . $this->_oauthTokenEndpoint;
        $url .= "?grant_type=refresh_token";
        $url .= "&refresh_token=" . urlencode($tokenData['refresh_token']);

        //$logFilename = date('YmdHis').'.oauth.refresh_token';

        $httpClient = new ActionStep_Api_HttpClient($this->_userAgent);
        $httpClient
            //->setDebugFilenames("/tmp/{$logFilename}.request", "/tmp/{$logFilename}.response")
            ->setMethod('POST')
            ->setUrl($url)
            ->setAuthBasic($this->_clientId, $this->_clientSecret);
        $response = $httpClient->send();

        if ($response->getStatusCode() != 200) {
            // we should redirect the user to some sort of "there was a problem, try again later" page here.
            // you should also analyze the response to see what you can do about this, it's an unexpected error.
            throw new Exception("Failed refreshing access token");
        }

        // test the response
        $body = $response->getBody();
        $tokenData = json_decode($body, true);
        $expectedKeys = array('access_token','expires_in','refresh_token','token_type','api_endpoint');
        foreach ($expectedKeys as $key) {
            if (array_key_exists($key, $tokenData) === false) {
                // Weird! possibly an error actionstep end which didn't change the HTTP status from 200
                // again, redirect user somewhere nice and analyze the response to resolve
                throw new Exception("Response for access token was incorrect, missing access token key: {$key}");
            }
        }

        // now, let's add an expiry date/time to our token data
        $tokenData['expires_timestamp'] = strtotime('+' . ($tokenData['expires_in'] - 30) . ' seconds');
        $tokenData['scope']             = $scope;

        $this->_setAccessToken(json_encode($tokenData));
        return $this;
    }

    public function getUserAgent() {
        return $this->_userAgent;
    }

    /**
     * This returns a space-delimited list of resource names that were requested with the access token
     * Anything not listed here will not be allowed when making an API call
     *
     * @return string|null
     */
    public function getAuthorizedScopes() {
        if ($this->_accessToken === null) {
            return null;
        }
        $tmp = json_decode($this->_accessToken, true);
        if (isset($tmp['scope'])) {
            return $tmp['scope'];
        } else {
            return null;
        }
    }
}