<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I/O TextField</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="txNama" id="" required autocomplete="off" placeholder="Masukan Nama"><br><br>
        <input type="number" name="txUmur" id="" required autocomplete="off" placeholder="Masukan Umur"><br><br>
        <input type="text" name="txAlamat" id="" required autocomplete="off" placeholder="Masukan Alamat"><br><br>
        <input type="submit" value="Simpan" name="btnSimpan"><br><br>
    </form>
    <?php
    class Biodata {
        public $nama;
        public $umur;
        public $alamat;


        public function setNama($nama) {
            $this->nama = $nama;
            if ($this->nama != "") {
                return $nama;
            } else
            echo "Data Masih Kosong!";
        }
        public function setUmur($umur) {
            $this->umur = $umur;
            if ($this->umur != "") {
                return $umur;
            } else
            echo "Data Masih Kosong!";
        }
        public function setAlamat($alamat) {
            $this->alamat = $alamat;
            if ($this->alamat != "") {
                return $alamat;
            } else
            echo "Data Masih Kosong!";
        }
    }

    $txNama = trim($_POST['txNama']);
    $txUmur = trim($_POST['txUmur']);
    $txAlamat = trim($_POST['txAlamat']);

    $biodata = new Biodata();
    if(isset($_POST['btnSimpan'])) {
        echo "Nama : " . $biodata->setNama($_POST['txNama']) ;
        if(!empty($txNama))
        $simpan1 = is_numeric($txNama);
        if ($simpan1 == true) { 
        echo " (ini adalah Angka) ";
        } else {
        echo " (ini adalah huruf) ";
        }
        echo "<br>";
        echo "Umur : " . $biodata->setUmur($_POST['txUmur']);
        if(!empty($txUmur))
        $simpan2 = is_numeric($txUmur);
        if ($simpan2 == true) { 
        echo " (ini adalah Angka) ";
        } else {
        echo " (ini adalah huruf) ";
        }
        echo "<br>";
        echo "Alamat : " . $biodata->setAlamat($_POST['txAlamat']);
        if(!empty($txAlamat))
        $simpan3 = is_numeric($txAlamat);
        if ($simpan3 == true) { 
        echo " (ini adalah Angka) ";
        } else {
        echo " (ini adalah huruf) ";
        }
    }
    ?>
</body>
</html>