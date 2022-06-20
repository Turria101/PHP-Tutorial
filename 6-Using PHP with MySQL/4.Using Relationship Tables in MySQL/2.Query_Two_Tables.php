<?php

/*
 - FK : if We Need to show the data for two tables  
 - PK : it should be the reference of FK
 - FK : set the columns without add any data 
 
*/


include_once("../1.Connecting PHP to MySQL/0.conn.php");


try{
	$get_query=$fetch->prepare
	(" SELECT product_sku ,size_id ,sizes FROM product_size  
	  INNER JOIN sizes 
	  ON product_size.size_id = sizes.id
	  WHERE  product_sku = 108 
	  ORDER BY orders
	  ");
	$get_query->execute();
	echo"<pre>";
    var_dump($get_query->fetchAll(PDO::FETCH_ASSOC));
  }
  catch(Exception $e)
  {
    echo $e->getMessage();	  
	  exit;
  }














?>