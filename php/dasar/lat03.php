<?php 

    function belajar(){
        echo "saya belajar Php";
    }
    function luasPersegi($p=5,$l=3)
    {
        $luas = $p * $l;
        echo $luas;
    }
    function luas($p=5,$l=3)
    {
        $luas = $p * $l;
        return $luas;
    }
    function base(){
        return "saya belajar coding";
    }
    echo base();
    echo '<br>';
    echo luas();
    echo '<br>';
    luasPersegi(10,6);
    echo '<br>';    
    belajar();
?>