<?php

define("BASE_URL","/");
 
if (isset($_GET['id'])) {

    $Product_id=intval($_GET['id']);
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
    
$result=$fetch->prepare('SELECT * FROM items WHERE ID= ?');	//prepare method is used for protecting the databsae from sql injection
$result->bindParam(1,$sku); // this  the placehoder of  mark_sring 
$result->execute(); // this will run the quey one time 
}
catch(Exception $e)
{
echo $e->getMessage();	
exit;
}

$product = $result->fetch(PDO::FETCH_ASSOC);	
 echo '<pre>';
 var_dump($product);
 exit;
return $product;
}





?>