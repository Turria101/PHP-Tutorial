<?php
class Vol{
 
public  $dec = 0.0;
public  $inc =0.0;

Function IncreaseUP(){

$up =0.0;
$up=+$_POST['get'];        
 
return 'its increasd up by :'.$up;

}


Function DecreaseUP(){
$dec = 0.0;
$dec *= $precent;
$dec +=0.10;
}

Function Action(){

    if(isset($_POST['exe']))  {
        echo '<h3>';
        echo $this->IncreaseUP().'%';
        echo '</h3>';
    }
    
    
}



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
 <form action="#" method="post">
 
<input type="range" name="get" id="#" min="0" max="100" ><br>
 <input type="submit" name="exe" value="Button">
 </form>

<div  style=" margin-left:400px;margin-top:100px;padding:53px 12px 23px;text-align:center; height:300px; width:600px;border-radius:14px; border:10px solid green;background:black;color:white;">
<?php
$pernd = new Vol();

echo $pernd->Action();

?>
</div>

</body>
</html>