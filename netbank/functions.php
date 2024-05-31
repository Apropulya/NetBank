<?php
    function kod(){
        $szam='1234567890';
        $kodi='';
        for ($i=0; $i < 8; $i++) { 
            $kodi.=$szam[rand(0,9)];
            //echo $kodi."<br>";
        }
        return $kodi;
    }
    function regis($nev,$jelsz){
        require "config.php";
        $egyedi=false;
        $kod="";
        //echo "dffgsfsdf<br>";
        while (!$egyedi) {
            $kod.=kod();
            //echo $kod."bhj ".$egyedi."<br>";
            if (mysqli_num_rows($conn->query("SELECT * FROM users WHERE azonosito='$kod'"))==0) {
                $egyedi=true;
            }
        }
        //echo '<script>console.log("'.$kod.'")</script>';
        $jelsz=password_hash($jelsz,PASSWORD_DEFAULT);
        $conn->query("INSERT INTO users VALUES(id,'$nev','$jelsz','$kod')");
        header("location: index.php");
    }
    function add($id){
        require "config.php";
        $szam=szamla_szam();
        $conn->query("INSERT INTO szamlak VALUES(id,'$szam',$id,0)");
    }
    function szamla_szam(){
        $elem='1234567890';
        $szam='';
        for ($i=0; $i < 3; $i++) { 
            for ($x=0; $x < 8; $x++) { 
                if (strlen($szam)==0) {
                    $szam.=$elem[rand(0,8)];
                }
                else{
                    $szam.=$elem[rand(0,9)];
                }
            }
            if ($i<2) {
                $szam.='-';
            }
        }
        return $szam;
    }
    function fc_log($un,$pass){
        require "config.php";
        $user=$conn->query("SELECT * FROM users WHERE nev='$un'")->fetch_assoc();
        if (password_verify($pass,$user['password'])) {
            setcookie("user",$user['id'],time()+(86400*30),"/");
            header("location: index.php");
        }
        else {
            echo'<script>alert("Helytelen jelszó!");</script>';
        }
        
    }
    function szamlaim(){
        require "config.php";
        $szamlak=$conn->query("SELECT * FROM szamlak WHERE userid=$_COOKIE[user]");
        while ($szamla=$szamlak->fetch_assoc()) {
            echo'<a href="user_szamla.php?szamla='.$szamla['szam'].'"><div class="🏎️">
                    <h4>'.$szamla['szam'].'</h4>
                    <p>'.$conn->query("SELECT * FROM users WHERE id=$_COOKIE[user]")->fetch_assoc()['nev'].'</p>
                    <p>'.$szamla['engyenleg'].'</p>
                </div>';
        }
    }
?>
