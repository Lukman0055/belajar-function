<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>
    Luas lingkaran
    </legend>
    <form action="" method="get">
        <label for="">lingkaran</label>
        <input type="number" min="1" name="s" required>
        <br>
        <input type="submit" name="simpan" value="simpan">
    </form>
    </fieldset>

    <?php
    if (isset($_GET['simpan'])) {   
        $sisi = $_GET['s'];
        function lingkaran($s){
            $luas = 3.14 * $s * $s;
            return $luas;
        }
        function keliling($k){
            $keliling = 2 * $k * 3.14;
            return $keliling;
        }
        $luas = lingkaran($sisi);
        echo "Luas Lingkaran : $luas<br>";
        $keliling = keliling($sisi);
        echo "keliling Lingkaran : $keliling";

    }
    ?>
</body>
</html>