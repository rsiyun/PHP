<?php 
// $names = ['tejo','budi', 'siti','100'];
// var_dump ($names);
// echo "<br>";
// foreach ($names as $name) {
//     echo $name;
//     echo "<br>";}
    $names = [
        "tejo" => "Surabaya",
        "budi" => "Malang",
        "siti" => "Sidoarjo"
        ];
    var_dump ($names);
    echo "<br>";
    foreach ($names as $name => $value) {
        echo $name.'=>'.$value;
        echo "<br>";
    }

?>
