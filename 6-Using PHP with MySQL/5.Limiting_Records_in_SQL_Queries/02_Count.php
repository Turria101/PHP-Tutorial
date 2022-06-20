
<?php





function get_product_count(){
require("../1.Connecting PHP to MySQL/0.conn.php");
    
    try {
        
        $db = $fetch->query("SELECT COUNT(sku) FROM product");

    } catch (\Throwable $th) {
        echo $th ->getMessage();
       exit;
    }
    
    var_dump( intval($db->fetchColumn(0)));  //  fetchcolumn it's  selection of the column instead of the whole column   so 0 it's first column
    }
    
    
?>