<?php
if (isset($_POST['Login'])) {
    $No_pendaftaraan = $_POST['np'];
    $Nisn = $_POST['nsn'];
    $Nama = $_POST['nama'];
    $Alamat = $_POST['alamat'];
    $Tempat_lahir = $_POST['tl'];
    $Tanggal_lahir = $_POST['tg'];
    $Asal_sekolah = $_POST['as'];
    $Jenis_kelamin = $_POST['jk'];
    $Jurusan = $_POST['jurusan'];
    $Agama = $_POST['agama'];
    $Nama_Ayah = $_POST['na'];
    $Pekerjaan1 = $_POST['pa'];
    $Nama_Ibu = $_POST['ni'];
    $Pekerjaan = $_POST['pi'];

    echo "No Pendaftaran : $No_pendaftaraan<br>";
    echo "Nisn           : $Nisn<br>";
    echo "Nama           : $Nama<br>";
    echo "Alamat         : $Alamat<br>";
    echo "Tempat Lahir   : $Tempat_lahir<br>";  
    echo "Tanggal Lahir  : $Tanggal_lahir<br>";
    echo "Asal Sekolah   : $Asal_sekolah<br>";
    echo "Jenis Kelamin  : $Jenis_kelamin<br>";
    echo "Jurusan        : $Jurusan<br>";
    if (isset($_POST['Login'])) {
        echo "Hobby : ";
        if (isset($_POST['hb1'])) {
        echo " " . $_POST['hb1'] . "<br>";
        }
        if (isset($_POST['hb2'])) {
        echo " " . $_POST['hb2'] . "<br>";
        }
        if (isset($_POST['hb3'])) {
        echo " " . $_POST['hb3'] . "<br>";
        }
        }
    echo "Agama          : $Agama<br>";
    echo "Nama Ayah      : $Nama_Ayah<br>";
    echo "Pekerjaan      : $Pekerjaan1<br>";
    echo "Nama Ibu       : $Nama_Ibu<br>";
    echo "Pekerjaan      : $Pekerjaan<br>";
    
}
?>