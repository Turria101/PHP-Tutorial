<?php

class WorldWide{

 public $http;
 private  $https_o;
 private  $DNS;
 
 function __construct($hp,$hps,$DS){

 $this->http=$hp;
 $this->https_o=$hps;
 $this->DNS=$DS;
 
}

public function get_http(){

  return $this->http;

}





}

$setup = new Worldwide("<a href=http://127.0.1.1 >Apace.Server</a>","www.google.com","192.162.1.1");
echo $setup->get_http();
?>