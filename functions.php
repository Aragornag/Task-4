<?php

function get_token($code){

	$curl = curl_init();
	
	$query = "client_id=".ID_Facebook."&redirect_uri=".REDIRECT_Facebook."&client_secret=".SECRET_Facebook."&code=".$code;
	
	curl_setopt($curl,CURLOPT_URL,TOKEN_Facebook."?".$query);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);
	
	$result = curl_exec($curl);
	echo $result;



	if(!isset($result)){
		exit(curl_error($curl));
		}
	
	if($i = json_decode($result)){
		if($i->error){
			exit($i->error->message);
		}
	}

		parse_str($result,$token);
        echo $token['access_token'];

		if (isset($token['access_token'])){
		return $token['access_token'];
		}

}

?>