<?php
$allowedcountries= 'US';// ALLOWED COUNTRIES TO REACH THE $urlgood url
$url = './index.php'; //you will have to make your own 404.php
$urlgood = './afolder/goodies.php';
$ip = $_SERVER["REMOTE_ADDR"];//a way to get the clients ip

$xml = simplexml_load_file("http://ip-api.com/xml/".$ip); //using ip-api to get countrycode 

$countrycode= $xml->countryCode; //parsing the country of the above request
if($countrycode!= $allowedcountries){ //if code received does not match the allowedcountries var
    header("Location: $url");//we send them to our 404.php
    }else if ($countrycode== $allowedcountries){ //however if it matches 
header("Location: $urlgood"); //we send them to the desired url
}
?>

