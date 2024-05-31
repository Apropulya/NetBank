<?php
    require "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Szia</title>
</head>
<body>
    <div class="d-flex align-items-center justify-content-center">
        <h2>Felhasználó Keresése</h2>
        <input type="text" placeholder="Keres" id="0">
    </div>
    <div id="1">

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
    $('#1').load('kerese.php');
    document.getElementById(0).addEventListener('keyup',()=>{
        $('#1').load('kerese.php?field='+document.getElementById(0).value);
    })
</script>
</html>