<nav>

    <ul>
        <li><a href="?menu=isi">isi</a></li>
        <li><a href="?menu=hapus">hapus</a></li>
        <li><a href="?menu=destroy">destroy</a></li>
    </ul>

</nav>
<?php  
session_start();
    if (isset($_GET['menu'])) {
        $menu=$_GET['menu'];
        echo $menu;
        switch ($menu) {
            case 'isi':
                isisession();
                break;
            case 'hapus':
                unset($_SESSION['nama']);
                break;
            case 'destroy':
                session_destroy();
                break;   
            
            default:
                # code...
                break;
        }
    }

//var_dump ($_SESSION);
function isisession(){
    $_SESSION["nama"]="Siyun";
    $_SESSION["kelas"]="XI-RPL";
    $_SESSION["tugas"]="indonesia";
}
?>