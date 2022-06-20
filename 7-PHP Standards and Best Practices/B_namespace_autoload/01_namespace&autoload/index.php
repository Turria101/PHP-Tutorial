<?php

ini_set("display",1);
//include('./http/client.php');
//include('./twitter/client.php');

include('./bootstrap.php');

# client here its class 
var_dump(new http\Client);
var_dump(new twitter\Client);

?>