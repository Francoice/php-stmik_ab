<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <title>Data Komentar</title>
    <style>
      h1{
        border-bottom: 1px solid #000;
        line-height: 5rem;
        
      }
    </style>
  </head>
  <body>
  <!-- <br><b>TOKO BUKU SEJAHTERA</b></br> -->

      <?php
 // define ("Judul",BUKU PEMOGRAMAN PHP );

       $nama = $_POST ["nama"];
       $email=$_POST ["email"];
       $comment= $_POST ["comment"];
       $previous = "javascript:history.back()";

//        mysql_connect("localhost","root","");
// mysql_select_db("komentar");
// $result=mysql_query("insert into data values('null','$nama','$email','$komentar')");
// if ($result) {
// echo "Data Berhasil Dikirim..<br>";
// }
// echo "<br><a href='tampil.php'>Lihat Komentar</a>";
     
       
    ?>
      <h1>Data Komentar Anda</h1>
      <p>Nama Anda : <?= $nama?></p>
      <p>Email Anda : <?= $email?></p>
      <p>Komentar : <?= $comment?></p>
      <h3><a href="javascript:history.back()">INPUT DATA LAGI</a></h3>
    
    </body>
</html>