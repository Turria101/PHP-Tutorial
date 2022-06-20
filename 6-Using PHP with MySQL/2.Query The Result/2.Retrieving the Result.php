<?php   

/**
 * All Copyright by @Mando Trex
 * we do use these Statements in the past 
 * to retrieveing the Result from the Database var_dump($fetch->fethchAll());  
 * fetch(PDO::FETCH_ASSOC);
 * fetchAll();
 * fetchAll(PDO::FETCH_ASSOC); 
 * we avoid the duplication by using the connection file in folder when we need to access at the datbase we included at the file ! to Query our 
 * Database !
 */
include_once("Connection/0.conn.php");

define("PAGE","Query The Result");
try {
$gather=$fetch->query("SELECT ID_ITEM,ITEM_NAME,IMG FROM items ");
$gather->fetch(PDO::FETCH_ASSOC);

}catch (Exception $th) {
echo $th->getMessage();
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo  PAGE ;?> </title>
    <link href="Framework/css/bootstrap.min.css" type="text/css" rel="stylesheet" > 
    <link href="Framework/css/mdb.css" type="text/css" rel="stylesheet"> 
</head>
<body>

<div style="clear:both">  

<div class="row">
<?php 
foreach ($gather as  $val) {
 echo
"
<div class='col-sm-1'> </div>
<div class='col-sm-3'> 
 
<figure class='figure'>

<img class='img-thumbnail figure-img' src=".$val['IMG']."  width='200px' >
 <a class='btn btn-success btn-sm ml-5' href='product.php?id=".$val['ID_ITEM']."'>Add to Card </a> 
</figure>
</div>
";
/*
class='img-thumbnail figure-img' */
}

?>

</div>

</div>

</body>
</html>