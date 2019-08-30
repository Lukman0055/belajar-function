<html>
<head><title>Login</title></head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<body>
<fieldset>
    <legend align="center"><h1>FORMULIR</h1></legend>
    <FORM ACTION="formulir.php" METHOD="POST" NAME="input">
        No.Pendaftaran :<br> <input type="number" name="np"><br>
        Nisn           :<br> <input type="number" name="nsn"><br>
        Nama           :<br> <input type="text" name="nama"><br>
        Alamat         :<br> <textarea name="alamat" cols="20" rows="5"></textarea><br>
        Tempat Lahir   :<br> <input type="text" name="tl"><br>
        Tanggal Lair   :<br> <input type="date" name="tg"><br>
        Asal sekolah   :<br> <input type="text" name="as"><br>
        Jenis_Kelamin  :<br> <input type="radio" name="jk" value="Laki-laki" checked>Laki-laki
                         <input type="radio" name="jk" value="Perempaun">Perempaun<br>                        
        Jurusan        :<br> <select name="jurusan">
                         <option value="Teknik Informatika">teknik informatika</option>
                         <option value="Teknik Otomotif">Teknik Otomotif</option>
                         <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                         </select><br>
        Hobby          :<br> <input type="checkbox" name="hb1" value="Musik"> Musik
                         <input type="checkbox" name="hb2" value="Olah Raga"> Olah Raga
                         <input type="checkbox" name="hb3" value="Game"> Game<br>
        Agama          :<br> <select name="agama">
                         <option value="Islam">Islam</option>
                         <option value="Kristen">Kristen</option>
                         <option value="Hindu">Hindu</option>
                         </select><br>
        Nama Ayah      :<br> <input type="text" name="na"><br>
        Pekerjaan Ayah :<br> <input type="text" name="pa"><br>
        Nama Ibu       :<br> <input type="text" name="ni"><br>
        Pekerjaan Ibu  :<br> <input type="text" name="pi"><br>
        <input type="submit" name="Login" value="Simpan">
    <input type="reset" name="reset" value="Reset">
</FORM>
</fieldset>
</body>
</html>