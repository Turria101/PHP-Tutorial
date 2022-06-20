<?php

function get_single_item($sku){
 
try{
    include_once("../1.Connecting PHP to MySQL/0.conn.php");
    
$result=$fetch->query('SELECT * FROM items WHERE ID=10');	
	
}
catch(Exception $e)
{
echo $e->getMessage();	
exit;
}

$product = $result->fetch(PDO::FETCH_ASSOC);	
return $product;
}


?>