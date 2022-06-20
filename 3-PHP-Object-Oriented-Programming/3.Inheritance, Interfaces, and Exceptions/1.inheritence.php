<?php

class  Cats{

    
    public  $Name;
    private $Age;
    private $Color=[];
    public  $Food;

    function __construct($n,$a,$c,$f){
        
        $this-> Name = $n;
        $this-> Age  = $a;
        $this-> Color[0]=$c ;
        $this-> Food=$f;

    }
    function cat_eating(){
      
     
      return "she's eating".$this->food;
    }



}

class Tiger extends Cats{

 public $color ;

 function __construct($n,$a,$c,$f, $cc){
 parent:: __construct($n,$a,$c,$f);
 $this->color=$cc;
 
}
function get_in(){

 return $this->color;

}

}

$Tiger = new Tiger("","","","","Orange");

echo $Tiger-> get_in();
?>