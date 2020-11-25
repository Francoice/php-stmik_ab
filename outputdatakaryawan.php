<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Hasil Biodata Anda</h2>
<pre>
Nama            : <?php echo $_POST["nama"];?><p>
Alamat          : <?php echo $_POST["mesage"];?><p>
Tempat Tgl Lahir: <?php echo $_POST["ttl"];?><p>
Jumlah Anak     : <?php echo $_POST["jumlah_anak"];?><p>
Jenis Kelamin   : <?php echo $_POST["jk"];?><p>
Agama           : <?php echo $_POST["combo"];?><p>
Pendidikan      : <?php echo $_POST["pdk"];?><p>
Alamat          : <?php echo $_POST["address"];?><p>
Hobi            : <?php echo $_POST["hobi"];?>
</pre>
<a href="inputdatakaryawan.php">Input Data Lagi</a>
</body>
</html>
