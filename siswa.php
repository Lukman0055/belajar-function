<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <p>Form Array</p>
    </center>
    <fieldset>
    <legend align="center">Form Array</legend>
    <form action="" method="get">
        <label for="">Masukan Jumlah</label>
        <input type="number" name="jml">
        <br>
        <input type="submit" name="submit" value="simpan">
        <hr>
    </form>
    <?php
        if (isset($_GET['submit'])) {
            $jml_form = $_GET['jml'];
            for ($i=1; $i <= $jml_form ; $i++) { 
                ?>
                <form action="formarray.php" method="post">
                <label for="">Nama</label>
                <input type="text" name="nama[]" required>
                <label for="">Kelas</label>
                <input type="text" name="kelas[]" required><br>
                <br>
                <br>

            <?php } ?>
            <input type="submit" name="sbm" value="simpan">
            <input type="reset" value="Reset">
            </form>
        <?php }
        ?>
    </fieldset>
</body>
</html>