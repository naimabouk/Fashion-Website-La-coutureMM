<?php ob_start();

$db['db_host'] = "localhost";
$db['db_user'] = "u497569487_lacourturemm";
$db['db_pass'] = "Phants2206?";
$db['db_name'] = "u497569487_lacouturemm";

foreach($db as $key => $value){
define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);



$query = "SET NAMES utf8";
mysqli_query($connection,$query);

//if($connection) {
//
//echo "We are connected";
//
//}


?>