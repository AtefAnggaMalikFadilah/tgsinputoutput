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
        <input type="text" name="txNama" id="txNama" required autocomplete="off" placeholder="Masukan Nama"><br><br>
        <input type="number" name="txUmur" id="txUmur" required autocomplete="off" placeholder="Masukan Umur"><br><br>
        <input type="text" name="txAlamat" id="txAlamat" required autocomplete="off" placeholder="Masukan Alamat"><br><br>
        <input type="submit" value="Simpan" name="btnSimpan"><br><br>
    </form>
    <?php
    class Biodata {
        public $nama;
        public $umur;
        public $alamat;


        public function setNama($nama) {
            $this->nama = $nama;
            if ($this->nama == "") {
                echo "Data Masih Kosong!";
            }
        }
        public function setUmur($umur) {
            $this->umur = $umur;
            if ($this->umur == "") {
                echo "Data Masih Kosong!";
            }
        }
        public function setAlamat($alamat) {
            $this->alamat = $alamat;
            if ($this->alamat == "") {
                echo "Data Masih Kosong!";
            }
        }
    }
    
    
    $biodata = new Biodata();
    if(isset($_POST['btnSimpan'])) {
        $txNama = trim($_POST['txNama']);
        $txUmur = trim($_POST['txUmur']);
        $txAlamat = trim($_POST['txAlamat']);
        
        echo "Nama : ";
        $biodata->setNama($_POST['txNama']);
        if(!empty($txNama)) {
            $simpan1 = is_numeric($txNama);
            if ($simpan1 == true) { 
                echo "$txNama (ini adalah Angka) ";
            } else {
                echo "$txNama (ini adalah huruf) ";
            }
        }
        echo "<br>";
        echo "Umur : ";
        $biodata->setUmur($_POST['txUmur']);
        if(!empty($txUmur)) {
            $simpan2 = is_numeric($txUmur);
            if ($simpan2 == true) { 
                echo "$txUmur (ini adalah Angka) ";
            } else {
                echo "$txUmur (ini adalah huruf) ";
            }
        }
        echo "<br>";
        echo "Alamat : ";
        $biodata->setAlamat($_POST['txAlamat']);
        if(!empty($txAlamat)) {
            $simpan3 = is_numeric($txAlamat);
            if ($simpan3 == true) { 
                echo "$txAlamat (ini adalah Angka) ";
            } else {
                echo "$txAlamat (ini adalah huruf) ";
            }
        }
    }
    ?>
</body>
</html>