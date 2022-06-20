<?php

define("BASE_URL","/");
 
if (isset($_GET['id'])) {

    $Product_id=intval($_GET['id']);
    $Product =get_single_item($Product_id); 

}




// get one item
function get_single_item($sku){
 
    include_once("../1.Connecting PHP to MySQL/0.conn.php");

    try{
    
$result_1=$fetch->prepare('SELECT * FROM product WHERE sku= ?');	//prepare method is used for protecting the databsae from sql injection
$result_1->bindParam(1,$sku); // this  the placehoder of  mark_sring 
$result_1->execute(); // this will run the quey one time 

}
catch(Exception $e)
{
echo $e->getMessage();	
exit;
}

$product = $result_1->fetch(PDO::FETCH_ASSOC);	

if($product == FALSE ) return $product;
$products["Sizes"]=array();


try {
$result= $fetch->prepare
("SELECT size 
  FROM product_size 
  INNER JOIN sizes 
  ON product_size.size_id =sizes.id 
  WHERE product_sku = ? 
  ORDER BY sizes.orders ");    
$result->bindParam(1,$sku);
$result->execute();

}catch (Exception $h){
    echo $h->getMessage();
 }

 // Fetch While_Loop 
 echo  '<select>'; 
while ($row=$result->fetch(PDO::FETCH_ASSOC)){

    # code...
      echo '
          <option>
     '.$products["Sizes"][]= $row["size"].'
            </option>
            ';
        }
       echo '</select>'; 

 return $product;

}




 // display the number of records
 function get_product_count(){
    require("../1.Connecting PHP to MySQL/0.conn.php");
    
    try {
        
        $db = $fetch->query("SELECT COUNT(sku) FROM product");
    } catch (\Throwable $th) {
        echo $th ->getMessage();
       exit;
    }
    
    return intval($db->fetchColumn(0));  //  fetchcolumn it's  selection of the column instead of the whole column   so 0 it's first column
    }
    
   echo get_product_count(); 


// get recent / last elements 
function get_recent(){

 require("../1.Connecting PHP to MySQL/0.conn.php");
try {

    $db=$fetch->query("SELECT product_name,sku,img FROM  product ORDER BY sku DESC LIMIT 4");
    
}catch (Exception $e) {
     echo $e->getMessage();
 exit; 
}
$recent = $db->fetchAll(PDO::FETCH_ASSOC);
$recent = array_reverse($recent);
var_dump($recent);
return $recent;
}

echo get_recent();





?>