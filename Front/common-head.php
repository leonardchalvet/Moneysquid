<?php 
session_start(); 
//require_once 'check-connexion.php';

/*=================================
=            TRUSTPILOT           =
==================================*/

function dateDiff($date1, $date2){
	$diff = abs($date1 - $date2);
    $array = array();
    $tmp = $diff;
    $array['second'] = $tmp % 60;
    $tmp = floor( ($tmp - $array['second']) / 60 );
    $tmp = floor( ($tmp - $array['minute']) / 60 );
    $array['hour'] = $tmp % 24;
    $tmp = floor( ($tmp - $array['hour'])  / 24 );
    $array['day'] = $tmp;
    $tmp = floor( $array['day']  / 30.5 );
    $array['month'] = $tmp;
    $tmp = floor( $array['day']  / 365.25 );
    $array['year'] = $tmp;
    $retour = null;
    if($array['year'] >= 1) {
    	$retour = $array['year']. ' année(s)';
    }
    else if($array['month'] >= 1) {
    	$retour = $array['month']. ' mois';
    }
    else if($array['day'] >= 1) {
    	$retour = $array['day']. ' jour(s)';
    }
    else {
    	$retour = $array['hour']. ' heure(s)';;
    }
    return $retour;
}

function getJSON($url) {
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = json_decode(curl_exec($ch));
	curl_close($ch);
	return $result;
}

$apiKey = '8N8IA85igAsDtjSKVWuN3XGzSGyxe5SX';
$numberOfReviews = getJSON('https://api.trustpilot.com/v1/business-units/50449f2700006400051a7265?apikey=' .$apiKey)->numberOfReviews->fiveStars;
$allReviews = getJSON('https://api.trustpilot.com/v1/business-units/50449f2700006400051a7265/reviews?stars=5&perPage=8&apikey=' .$apiKey);

/*=====================================
=            END TRUSTPILOT           =
======================================*/

?>