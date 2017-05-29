<?php

function base_url($url1){
    $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."/";
    return $url.$url1;
}



class head{
    public $variable;

    public function __construct()

    {
    }
}
$h = new head;
?>