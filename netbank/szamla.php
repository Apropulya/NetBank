<?php
    require "config.php";
    require "functions.php";
    if (isset($_POST['nyeee'])) {
        add($_GET['id']);
    }
    if (isset($_POST['faf'])) {
       $conn->query("UPDATE szamlak SET engyenleg=engyenleg+$_POST[penz] WHERE szam='$_POST[szam]'");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>🥹💩</title>
</head>
<body>
    <form action="szamla.php?id=<?=$_GET['id'];?>" method="post">
        <input type="submit" name="nyeee" value="Számla hozzáadása">
    </form>
    <?php
        $szamlak=$conn->query("SELECT * FROM szamlak WHERE userid=$_GET[id]");
        while ($szamla=$szamlak->fetch_assoc()) {
            echo'<div class="🏎️">
                    <h4>'.$szamla['szam'].'</h4>
                    <p>'.$conn->query("SELECT * FROM users WHERE id=$_GET[id]")->fetch_assoc()['nev'].'</p>
                    <p>'.$szamla['engyenleg'].'</p>
                    <form action="szamla.php?id='.$_GET['id'].'" method="post">
                    <input type="number" name="penz" id="">
                    <input type="text" name="szam" style="display: none;" value="'.$szamla['szam'].'" id="">
                    <input type="submit" name="faf" value="Feltöltés">
                </form>
                </div>';
        }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
</html>