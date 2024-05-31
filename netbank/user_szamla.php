<?php
    require "config.php";
    require "functions.php";
    if (isset($_POST['faf'])) {
        if (mysqli_num_rows($conn->query("SELECT * FROM szamlak WHERE szam='$_POST[szam]'"))!=0) {
            if ($_POST['penz']<=$conn->query("SELECT * FROM szamlak WHERE szam='$_GET[szamla]'")->fetch_assoc()['engyenleg']) {
                $conn->query("UPDATE szamlak SET engyenleg=engyenleg+$_POST[penz] WHERE szam='$_POST[szam]'");
                $conn->query("UPDATE szamlak SET engyenleg=engyenleg-$_POST[penz] WHERE szam='$_GET[szamla]'");
                $conn->query("INSERT INTO tranzakciok VALUES (id,'$_GET[szamla]',$_POST[penz],'$_POST[szam]','".date("Y-n-d H:i:s")."')");
            }
            else {
                echo'
                <script>
                alert("Helytelen összeg!");
                </script>';
            }
        }
        }
        else {
            echo'
            <script>
            alert("Helytelen számla szám!");
            </script>';
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
    <?php
        $szamlak=$conn->query("SELECT * FROM szamlak WHERE userid=$_COOKIE[user]  AND szam='$_GET[szamla]'");
        while ($szamla=$szamlak->fetch_assoc()) {
            echo'<div class="🏎️">
                    <h4>'.$szamla['szam'].'</h4>
                    <p>'.$conn->query("SELECT * FROM users WHERE id=$_COOKIE[user]")->fetch_assoc()['nev'].'</p>
                    <p>'.$szamla['engyenleg'].'</p>
                    <form action="user_szamla.php?szamla='.$_GET['szamla'].'" method="post">
                    <input type="text" name="szam" placeholder="Számla szám" id="">
                    <input type="number" placeholder="Összeg" name="penz" id="">
                    <input type="submit" name="faf" value="Utalás">
                </form>
                </div>';
        }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
</html>