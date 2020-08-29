<?php 

    // $hari = 4;
    // switch ($hari) {
    //     case '1':
    //         echo "Hari minggu";
    //         break;
    //     case '2':
    //         echo "Hari Senin";
    //         break;
    //     case '3':
    //         echo "Hari Selasa";
    //         break;
        
    //     default:
    //         echo "Pilihan belum dibuat";
    //         break;
    // }
    
    $pilihan = 'hapus';
    switch ($pilihan) {
        case 'tambah':
            echo "Data di tambah";
            break;
        case 'ubah':
            echo "Data di ubah";
            break;
        case 'hapus':
            echo "Data di hapus";
            break;
        default:
            echo "Data belum dibuat";
            break;
    }
?>