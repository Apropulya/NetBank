<?php
    require "functions.php";
    if (isset($_POST['log'])) {
        fc_log($_POST['usern'],$_POST['pass']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div  class="d-flex align-items-center justify-content-center">
        <form id="3" action="regist.php" method="post">
            <h1>Bejelentkezés</h1><br>
            <input type="text" name="usern" placeholder="Username"><br>
            <input type="password" name="pass" placeholder="Password"><br>
            <input type="submit" class="reg_btn" name="log" value="Log in">
        </form>
    </div>
</body>
</html>