<?php 
include "fungsi.php";
$Kalku = new Kalkulator();

//implementasikan sebuah perhitungan  aritmatika dalam bentuk OOP
//gunakan ketiga visbility untuk set property dan memiliki method sejumlah operator aritmatika
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
</head>
<body>
    <center>
    <form method="POST"> 
        <input type="text" name="x" size="3" required>
            <select name="operasi">
            <option value="tambah">+</option>
            <option value="kali">x</option>
            <option value="kurang">-</option>
            <option value="bagi">:</option>
            </select>
                <input type="text" name="y" size="3" required>
                <input type="submit" value="Hitung">
            <?php 
            if ($_POST) {
                $x = $_POST['x'];
                $y = $_POST['y'];
                if ($_POST['operasi'] == "tambah") {
                    echo "<div class='result'>Hasil: ".$x." + ".$y." = ".$Kalku->setTambah($x, $y)."</div>";
                } elseif($_POST['operasi'] == "kali") {
                    echo "<div class='result'>Hasil: ".$x." x ".$y." = ".$Kalku->setKali($x, $y)."</div>";
                } elseif ($_POST['operasi'] == "kurang") {
                    echo "<div class='result'>Hasil: ".$x." - ".$y." = ".$Kalku->setkurang($x, $y)."</div>";
                } elseif ($_POST['operasi'] == "bagi") {
                    echo "<div class='result'>Hasil: ".$x." : ".$y." = ".$Kalku->setBagi($x, $y)."</div>";
                }
            }
       ?>
    </form>   
    </center>
</body>
</html>
