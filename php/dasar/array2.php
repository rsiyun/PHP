<?php 

    $pisang = ["Raja" =>200, "Kepok"=>300, "Susu"=> 200];
    $buahs = ["Apel" => 200 ,"Anggur" => 300,"Pisang" => $pisang];
    var_dump ($buahs);
    echo "<pre>";
    print_r($buahs);
    echo "</pre>";
    foreach ($buahs as $buah => $value) {
        if (! is_array($value)) {
            echo $buah. "=>" .$value;
            echo "<br>";
        }
        else {
            echo $buah;
            foreach ($value as $key => $value) {
                echo "<li>";
                echo $key."=>".$value;
                echo "</li>";
            }
        }
    }

?>