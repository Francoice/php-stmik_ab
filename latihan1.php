
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Peminjaman Buku Perpustakaan</title>
    <style media="screen">
      /* .link{
        font-family: sans-serif;
        color:blue;
      } */
    </style>
  </head>
  <body> 
<div>
  <body text="black" style="margin:auto 200px auto 200px;
   font-size:30px;">
    <div>
    <img style="height :600px;width:600px;" src="profile4.jpg.jpeg " alt="profile_pic ">
   
    </div>
 
  <tbody>
    <table>
    <table border="0">

      <?php
      $NIM = "2010036";
      $Nama  = "R.Francoice Victoryo R.K";
      $Kelas  = "1.1B";
      $Kode = "B0012";
      $nama = "Pemograman PHP";
      $Lama  = "2 Hari";


      echo "<tr><td><b>NIM Peminjam</td><td> = </td></b><td><b>$NIM</td></tr></b><br>";
      echo "<tr><td><b>Nama Peminjam</td><td> = </td></b><td><b>$Nama</td></tr></b><br>";
      echo "<tr><td><b>Kelas Peminjam</td><td> = </td></b><td><b> $Kelas</td></tr></b><br>";
      echo "<tr><td><b>Kode Buku Yang Dipinjam</td><td> = </td></b><td><b>$Kode</td></tr></b><br>";
      echo "<tr><td><b>Nama Buku Yang Dipinjam </td><td>= </td></b><td><b>$nama</td></tr></b><br>";
      echo "<tr><td><b>Lama Peminjaman </td><td>=</td></b><td> <b>$Lama</td></tr></b><br>";

      echo ('<tr><td><b><p>**Apabila Pengembalian Buku Melewati Batas Waktu Maka Akan Dikenakan Denda *</td></tr></p></p>');
  
    ?>
    
    </tbody>
    </table>
  </body>
</html>