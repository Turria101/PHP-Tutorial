<?php

class Account{

protected $username;
protected $Balance;
private   $ID;    
private   $transaction;
public $count ;
public  function user_n(){
    
    
     $store =[];
    if(isset($_POST['add'])){
    $username = $_POST['name'];
       
    if($username == ""){
        echo " <h2> error has no name</h2> " ;
    }
    elseif(!empty($username)){
        echo " <h2>  has  name</h2> " ;
            
           echo array_push($store ,$username); 
           var_dump($store);
        }

       else{

        echo " <h2> error has no action</h2> "; 
       } 
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
     
    <label>Username</label> <br> 
    <input type="text" name="name" placeholder="Enter the name... " ><br>   
    <input type="submit" name="add"  value="Add" >  
    </form>
<?php


  $user= new Account();

 var_dump( $user->user_n());

?>

</body>
</html>