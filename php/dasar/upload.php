<form action="" method="post" enctype="multipart/form-data">

    <label for="upload">cari!</label>
    <input type="file" name="upload" id="upload">
    <button type="submit" name="tombol">Cari!</button>

</form>
<?php 
    if (isset($_POST['tombol'])) {
        $file=$_FILES['upload'];
        //var_dump ($coba);
        foreach ($file as $key => $value) {
            echo $key.' => '.$value;
            echo "<br>";
        }
        $nama=$_FILES['upload']['name'];
        $tmp=$_FILES['upload']['tmp_name'];
        move_uploaded_file($tmp, 'img/'.$nama);
    }
?>