<?php


define("BASE_URL","/");
 
if (isset($_GET['id'])) {

    $Product_id=intval($_GET['id']);
    $Product =get_single_item($Product_id); 

}




function get_single_item($sku){
 
    include_once("../1.Connecting PHP to MySQL/0.conn.php");
try{
    
$result=$fetch->prepare('SELECT * FROM product WHERE sku= ?');	//prepare method is used for protecting the databsae from sql injection
$result->bindParam(1,$sku); // this  the placehoder of  mark_sring 
$result->execute(); // this will run the quey one time 
}
catch(Exception $e)
{
echo $e->getMessage();	
exit;
}

$product = $result->fetch(PDO::FETCH_ASSOC);	

if($product == FALSE ) return $product;
$product["Sizes"]=array();


try {
$result= $fetch->prepare
("SELECT size_id 
  FROM product_size 
  INNER JOIN sizes 
  ON product_size.size_id =sizes.id 
  WHERE product_sku = ? 
  ORDER BY sizes.orders ");    
$result->bindParam(1,$sku);
$result->execute();
// Fetch While_Loop 

}catch (Exception $h){
    echo $h->getMessage();
 }
 return $product;

}



?>