<?php
    $UserName = $_GET['UserName'];
    $Message = $_GET['Message'];

	$url = "Your Webhook URL";
	$headers = [ 'Content-Type: application/json; charset=utf-8' ];
	$POST = [ 'username' => 'UnityBot', 'avatar_url' => 'https://i.ibb.co/zF7B5RW/Avatar.jpg', 
	'image' => 'https://i.ibb.co/6Y0Q83W/Unity.jpg', 'embeds' => 
	[[ 'title' => $UserName, 'description'=> $Message,
	'image' => ['url' => 'https://i.ibb.co/6Y0Q83W/Unity.jpg']]]];

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
	$response   = curl_exec($ch);
?>