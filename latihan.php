<html>
    <head><title>Pengolahan Form</title></head>
<body>
    <FORM ACTION = "" METHOD = "POST" NAME = "input">
        Nama Anda  : <input type="text" name="nama" value="Nama"><br>
        Nilai ke-1 : <input type="number" name="nilai1" value="nilai1"><br>
        Nilai ke-2 : <input type="number" name="nilai2" value="nilai2"><br>
        <input type = "submit" name = "Input" value = "Input">
</FORM>
</body>
</html>

<?php
if (isset($_POST['Input'])) {
    $nama = $_POST['nama'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $rata= ($nilai1+$nilai2)/2;

echo "Nama Anda   : <b>$nama</b><br>";
echo "Nilai Ke-1  : <b>$nilai1</b><br>";
echo "Nilai Ke-2  : <b>$nilai2</b><br>";
echo "Rata - Rata : <b>$rata</b><br>";
}
?>