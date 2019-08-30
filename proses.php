<?php
if (isset($_POST['Login'])) {
    $Nama = $_POST['nama'];
    $Alamat = $_POST['jl'];
    $Alamat1 = $_POST['kec'];
    $Alamat2 = $_POST['kota'];
    $Alamat3 = $_POST['pro'];
    $Alamat4 = $_POST['kp'];
    $Nama_Barang = $_POST['nb'];
    $Harga_Barang = $_POST['hb'];
    $Jumlah_Barang = $_POST['jb'];
if ($Jumlah_Barang>=10) {
    echo"Selamt anda mendapatkan diskon 20%<br>";
    $diskon=$Harga_Barang*20/100;
}elseif ($Jumlah_Barang>=5) {
    echo"<marquee><b><i>Selamat anda mendapatkan diskon 10%</i></b></marquee><br>";
    $diskon=$Harga_Barang*10/100;
}elseif ($Jumlah_Barang<0) {
    echo"Pesanan Tidak Bisa Diproses<br>";
    die;
}
    $jumlahharga= $Harga_Barang*$Jumlah_Barang;
    $total=$jumlahharga-$diskon;
    $Deskripsi = $_POST['ds'];
    $Tanggal_Pembelian = $_POST['tb'];

    echo"Nama : $Nama <br>";
    echo"Alamat : $Alamat <br>";
    echo"Kecamatan : $Alamat1 <br>";
    echo"Kota : $Alamat2 <br>";
    echo"Provinsi : $Alamat3 <br>";
    echo"Kampung/Jalan : $Alamat4 <br>";
    echo"Nama Barang : $Nama_Barang <br>";
    echo"Harga Barang : $Harga_Barang <br>";
    echo"Deskripsi : $Deskripsi <br>";
    echo"Tanggal Pembelian : $Tanggal_Pembelian <br>";
    echo"<hr>";
    echo"Jumlah Barang : $Jumlah_Barang <br>";
    echo"Diskonnn : $diskon <br>";
    echo"Jumlah Harga : $jumlahharga <br>";
    echo"TOTAL : $total";
}    
?>