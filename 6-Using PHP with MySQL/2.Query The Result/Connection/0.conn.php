<?php

define("DB_SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DB_SQL","tshirts");
define("DB_PORT","3306");

try {

$fetch= new PDO("mysql:host=".DB_SERVER.";dbname=".DB_SQL.";port=".DB_PORT."",USERNAME,PASSWORD);
$fetch->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$fetch->exec("SET NAMES'utf8'");
echo '<pre>';



} catch (Exception $e) {


echo $e->getMessage();

}


?>

