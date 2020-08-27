<form action="" method="post">
<label for="email">Email:</label>
<input type="email" name="email" id="email">
<label for="password">Password:</label>
<input type="password" name="password" id="password">
<button name="kirim" type="submit">Kirim!</button>
</form>
<?php 
    
    if (isset($_POST["kirim"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        echo $email;
        echo "</br>";
        echo $password; 
    }

?>