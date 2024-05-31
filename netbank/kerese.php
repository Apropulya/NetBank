<?php
require "config.php";
if (isset($_GET['field'])) {
    $talalatok=$conn->query("SELECT * FROM users WHERE azonosito LIKE '%$_GET[field]%'");
    while ($talalat=$talalatok->fetch_assoc()) {
        echo '<div>
                    <h4>'.$talalat['nev'].'</h4>
                    <p>'.$talalat['azonosito'].'</p>
                </div>';
    }
}
else {
    $talalatok=$conn->query("SELECT * FROM users ");
    while ($talalat=$talalatok->fetch_assoc()) {
        echo '<a href="szamla.php?id='.$talalat['id'].'"><div class="d-flex align-items-center justify-content-center">
                    <h4>'.$talalat['nev'].'</h4>
                    <p>'.$talalat['azonosito'].'</p>
                </div></a>';
    }
}
?>
