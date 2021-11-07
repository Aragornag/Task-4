<?php

require_once 'vendor/autoload.php';

$google_client = new Google_Client();
$google_client->setClientId('162109943796-4l40u9k7o61qn0uvt5b2lec38oge4i3i.apps.googleusercontent.com');
$google_client->setClientSecret('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');
$google_client->setRedirectUri("https://art-task4.epizy.com/auth.php");
$google_client->addScope('email');
$google_client->addScope('profile');

define('ID_Facebook', '314156330082299');
define('SECRET_Facebook', 'e48a5f77f87c3fdc91852fe7a9fbcbb0');
define('URL_AUTH_Facebook', 'https://www.facebook.com/dialog/oauth');
define('REDIRECT_Facebook','https://art-task4.epizy.com/auth_facebook.php');
define('TOKEN_Facebook','https://graph.facebook.com/oauth/access_token');
define('GET_DATA_Facebook','https://graph.facebook.com/me');

session_start();

?>