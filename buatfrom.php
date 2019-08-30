<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<fieldset>
<legend align="center"><marquee>FORMULIR BARANG</marquee></legend>
<body>
    <form action="proses.php" method="POST">
    <table align="center">
    <tr>
    <td>Nama</td>                
    <td>:</td>
    <td><input required type="text" name="nama"></td>
    </tr>
    <tr>
    <td>Alamat/Kp</td>              
    <td>:</td>
    <td><input required type="text" name="jl"></td>
    </tr>
    <tr>
    <td>Kecematan</td>
    <td>:</td>
    <td><input required type="text" name="kec"></td>
    </tr>
    <trait<>
    <td>Kota</td>
    <td>:</td>
    <td><input required type="text" name="kota"></td>
    </tr>
    <tr>
    <td>Provinsi</td>
    <td>:</td>
    <td><input required type="text" name="pro"></td>
    </tr>
    <tr>
    <td>Kampung/Jalan</td>
    <td>:</td>
    <td><input required type="text" name="kp"></td>
    </tr>
    <tr>
    <td>Nama Barang</td>         
    <td>:</td>
    <td><input required type="text" name="nb"></td>
    </tr>
    <tr>
    <td>Harga Barang</td>        
    <td>:</td>
    <td><input type="number" name="hb"></td>
    </tr>
    <tr>
    <td>Jumlah Barang</td>       
    <td>:</td>
    <td><input required type="number" name="jb"></td>
    </tr>
    <tr>
    <td>Deskripsi</td>           
    <td>:</td>
    <td><textarea required name="ds" cols="20" rows="5"></textarea></td>
    </tr>
    <tr>
    <td>Tanggal Pembelian</td>   
    <td>:</td>
    <td><input required type="date" name="tb"></td>
    </tr>
    <tr>
    <td><input type="submit" name="Login" value="Simpan"> <input type="reset" name="reset" value="Reset"></td>
    </tr>
</body>
</fieldset>
</html>