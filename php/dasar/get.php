<form action="" method="get">

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" autocomplete="off">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <button name="tombol" type="submit">Kirim!</button>
</form>
<?php 

    if (isset($_GET["tombol"])) {
        $email=$_GET["email"];
        $password=$_GET["password"];
        echo $email;
        echo "<br>";
        echo $password;
    }

?>