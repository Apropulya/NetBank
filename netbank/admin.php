<?php
    require "functions.php";
    //🏎️();
    if (isset($_POST['regist'])) {
        regis($_POST['nev'],$_POST['jelszo']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>
<body>
    <div class="d-flex align-items-center justify-content-center" style="height: 250px;">
        <div class="💩"><form action="admin.php" method="post">
            <h1>Új ügyfél hozzáadás</h1>
            <input type="text" name="nev" class="🙀" placeholder="Ügyfél neve">
            <br>
            <input type="password" name="jelszo" class="🙀" placeholder="Jelszó">
            <br>
            <input type="submit" name="regist" value="Regsztrál">
        </form></div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>