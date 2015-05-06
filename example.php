<?php


session_start();
include dirname(__FILE__) . '/library/Actionstep/include.php';

$clientId       = "your-client-id";
$clientSecret   = "your-client-secret";
$scope          = "actions participanttypes participants actiontypes";
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

$response = Actionstep_Api_ResourceHelper::getInstance()->findMany("actions", array(
    'filters'   => array(
        'id_gt'=>10,
        'actionType'=>array(
            'primaryParticipantType'=>array(
                'name_ilike'=>'client'
            )
        ),
    ),
    'include'  => array('actionType','actionType.primaryParticipantType'),
    'sort'     => array('actiontypes'=>'name', 'name'),
    'pageSize' => 100
));

if ($response === false) {
    die("No records found");
} elseif ($response instanceof Actionstep_Api_Response_Get) {
    $actions = $response->actions();
    echo "Found " . sizeof($actions) . " matches\n<br>";
    foreach ($actions as $action) {
        echo $action->id . ": " . $action->name . " (" . $action->actionType()->name . ")\n<br>";
    }
}