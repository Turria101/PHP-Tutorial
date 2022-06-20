
<?php// function defination
 
 echo '<form action="#" method="post"> <input type="text" name="txt" style="height=20px; border-raduis=3px;"  > <br> <input type="submit"  value="submit"  name="go"> </form>';
 
 $take_whatis=$_POST['txt'];
 //with return 
 $receive=function() use($take_whatis){
 
 return 'I took '.$take_whatis;
 
 };
 if(isset($_POST['go'])){
 echo  '<h1>'.'<br>' .$receive().'<br>'.'</h1>';
 
 }
 
 //with no return
 function void(){
 
 echo "hey its func with no return";
 
 }
 void();
 ?>