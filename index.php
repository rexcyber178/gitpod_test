<?php 
include "konek.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="o">
    <form action="login.php" method="POST">
        <fieldset>
        <legend>Login</legend>
        <p>
            <label>Username :</label>
            <input type="text" id="username" name="username" placeholder="username..." required/>
            <label>Password :</label>
            <input type="password" id="password" name="password" placeholder="password..." required/>
            <br><br><button type="submit">Login</button></br></br>
            <?php
              if (isset($_GET['error']) && $_GET['error'] == 1) {
              echo "<i style='color: red;'>Username atau password salah!</i>";
              }
            ?>
        </p>
        </fieldset>
    </form>
</div>
</body>
</html>