<?php

define("DB_SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","root");
define("DB_SQL","tshirts");
define("DB_PORT","3306");

try {

$fetch= new PDO("mysql:host=".DB_SERVER.";dbname=".DB_SQL.";port=".DB_PORT."",USERNAME,PASSWORD);
$fetch->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$fetch->exec("SET NAMES'utf8'");



} catch (Exception $e) {


echo $e->getMessage();

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

</body>
</html>