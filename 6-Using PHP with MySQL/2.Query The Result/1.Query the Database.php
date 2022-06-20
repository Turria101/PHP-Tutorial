<?php   
include_once("Connection/0.conn.php");

define("PAGE","Query The Result");
try {
$gather=$fetch->query("SELECT * FROM items WHERE ID>-1 ");
$r=$gather->fetch(PDO::FETCH_ASSOC);
  if($r["IMG"]=="IMG/img/shirts/101.jpg"){
	echo  "<img src=".$r["IMG"].">";
	 
 }
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

<div>  

<div class="row">
<?php 

foreach ($gather as  $val) {
 if($val["IMG"]=="IMG/img/shirts/101.jpg"){
	echo  "<img src=".$val["IMG"].">";
	 
 }
 else{
	 
 	 
 }
 echo
"
<div class='col-sm-1'> </div>
<div class='col-sm-3'> 
 
<figure class='figure'>

<img class='img-thumbnail figure-img' src=".$val['IMG']."  width='200px' >
 <a class='btn btn-success btn-sm ml-5' href='../3. Filtering Input for Queries/4.Preparing_Statement.php?id=".$val['ID']."'>Add to Card </a> 
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