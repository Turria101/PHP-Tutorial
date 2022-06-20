<?php

define("BASE_URL","/");
 
if (isset($_GET['id'])) {

    $Product_id=intval($_GET['id']); // make it integer which is no letter 
    $Product =get_single_item($Product_id); 

}




try {
    include_once("../1.Connecting PHP to MySQL/0.conn.php");
    
} 
catch (Exception $e) {
    echo $e->getMessage();
}





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