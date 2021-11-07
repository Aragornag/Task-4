<?php
require_once 'vendor/autoload.php';
 
// init configuration
$clientID = '848856086610-qn6pc0rc4mftbaua324a9s3ds442j59r.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'https://art-task4.epizy.com/auth.php';
  
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
 
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
  
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
 
  // now you can use this profile info to create account in your website and make user logged in.
} else {
  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
}
?>