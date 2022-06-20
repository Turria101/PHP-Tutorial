<?php

include_once("0.conn.php");
$output=$fetch->query("SELECT * FROM T_XSON");
$output->fetch(PDO::FETCH_ASSOC);
      foreach ($output as  $column) {
        echo "<hr>";
        echo " PRODUCT_ID:";
        print_r($column['ID']);
        echo " PRODUCT:";
        print_r($column['PD_NAME']);
    }
    
   

   ?>