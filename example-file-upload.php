<?php


session_start();
include dirname(__FILE__) . '/library/Actionstep/include.php';

$clientId       = "your-client-id";
$clientSecret   = "your-client-secret";
$scope          = "files";
$redirectUri    = "https://your-redirect-uri";
$userAgent      = "your-user-agent";
$apiEndpoint    = "fe-api.actionsteplabs.com";

$oauthClient = new Actionstep_Api_oAuthClient($clientId, $clientSecret, $scope, $userAgent, $apiEndpoint);
if (isset($_GET['revoke']) && $_GET['revoke'] == 'T') {
    $oauthClient->revokeToken();
    header('Location: ' . $redirectUri);
    exit;
}
if ($oauthClient->isAuthenticated() === false) {

    if (isset($_GET['code'])) {
        $oauthClient->convertAuthorizationCodeToAccessToken($_GET['code'], $redirectUri);
        header('Location: ' . $redirectUri);
        exit;
    } else {
        $oauthClient->redirectUserToAuthenticationUrl($redirectUri);
        exit;
    }
}

$id = Actionstep_Api_ResourceHelper::getInstance()->uploadFile("/tmp/some-file.zip");

die("Upload completed, 'files' resource identifier: {$id}");