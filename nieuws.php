<?php

function getLatestNews(){
	$response = http_get("https://virgoapi.vps.sv-virgo.nl/nieuws/latest");
	console.log($response);

}

function getAllNews(){
	//TODO add function
}

?>
