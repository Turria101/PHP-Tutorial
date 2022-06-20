<?php

namespace http;
class Client {

#test

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
    <form action="" method="post">
    <select option='choose your service' name='spt'>         
        <option> Drivers </option>
        <option> Softwares </option>
        <option> Support </option>
        <option> FQA</option>
    </select>
    <br>
    <input type='submit'  name='vat'>
</form>
   <?php
    if (isset($_POST['vat'])) {
        $support = $_POST['spt'];
        var_dump($support);
        echo  "<p style='color:red;'>".$support."</p>";
      }
    ?>
</body>
</html>