<?php

require 'config.php';



if(!isset($_GET['code']))
{
    exit('error code');
}
/*
$token = json_decode(file_get_contents('https://graph.facebook.com/v2.9/oauth/access_token
?client_id='.ID_Facebook.
'&redirect_uri='.REDIRECT_Facebook.
'&client_secret='.SECRET_Facebook.
'&code='.$_GET['code']),true);*/

$curl = curl_init();

	$query = "client_id=".ID_Facebook."&redirect_uri=".REDIRECT_Facebook."&client_secret=".SECRET_Facebook."&code=".$_GET['code'];

	curl_setopt($curl,CURLOPT_URL,TOKEN_Facebook."?".$query);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);

	$result = curl_exec($curl);
    $token = json_decode($result,true);
if(!isset($token))
{
    exit('error token');
}



//access_token
$query = "client_id=".ID_Facebook."&redirect_uri=".REDIRECT_Facebook."&client_secret=".SECRET_Facebook."&code=".$_GET['code'].'&access_token='.$token['access_token'].'&fields=id,name,email';

	curl_setopt($curl,CURLOPT_URL,GET_DATA_Facebook."?".$query);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);

	$result = curl_exec($curl);
    $data = json_decode($result,true);
if(!isset($data))
{
    exit('error token');
}

$_SESSION['user_image'] = 'https://graph.facebook.com/'. $data['id'] .'/picture';

$_SESSION['access_token'] = $token['access_token'];

if(!empty($data['name']))
  {
   $_SESSION['user_first_name'] = $data['name'];
  }

if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

header('Location: https://art-task4.epizy.com');
?>