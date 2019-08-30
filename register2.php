<?php
if (isset($_POST['Login'])) {
    $Nama = $_POST['nama'];
    $Alamat = $_POST['alamat'];
    $Jenis_Kelamin = $_POST['jk'];
    $Agama = $_POST['agama'];
    $Email = $_POST['eml'];
    $Password = $_POST['pw'];
    if ($Password == '156' && $Email == 'lkmnsryaa@gmail.com') {
        $a = "Aktif";
    }else {
        $a = "Tidak Aktif";
    }
    echo " Nama          : ".$Nama."<br>";
    echo " Alamat        : ".$Alamat."<br>";
    echo " Jenis Kelamin : ".$Jenis_Kelamin."<br>";
    echo " Agama         : ".$Agama."<br>";
    echo " Email         : ".$Email."<br>";
    echo " Status Akun   : ".$a."<br>";

}
?>