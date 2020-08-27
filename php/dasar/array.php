<?php 
    $buahs = ["Mangga","jeruk",500,"apel",300,2.5];
    var_dump ($buahs);
    echo "<br>";
    echo $buahs[0];
    echo "<br>";
    foreach ($buahs as $buah => $value) {
        echo $buah. "=>" .$value; 
        echo "<br>";
    }
    //aray asoc
    $hargas = ["mangga" => 300, "apel" => 200, "anggur" => 100];
    echo $hargas["anggur"];
    echo "<br>";
    foreach ($hargas as $harga => $value) {
        echo $harga. " harganya " .$value;
        echo "<br>";
    }
    $isi = array_keys($hargas);
    var_dump ($isi);
    echo "<br>";
    echo $isi[0];

?>