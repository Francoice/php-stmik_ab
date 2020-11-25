<!DOCTYPE html>
  <head>
    <title>Keliling Persegi Panjang dan Luas Segitiga</title>
  </head>

  <body>
 <?php
  
     echo"<br><b> Hitung Keliling Persegi Panjang </b></br>";
     echo"<br> panjang = 12</br>";
     echo "lebar = 8";
     $panjang =12;
     $lebar =8;
     $keliling =2 * ($panjang + $lebar);
     echo "<br>Rumus Keliling Persegi Panjang: 2 x ($panjang + $lebar)</br>";
     echo "Persegi Panjang dengan Lebar: $lebar, dan Panjang: $panjang, maka : <br>";
     echo "Keliling Persegi Panjang : $keliling <br>";


    echo "<br><b> Hitung Luas Segitiga </b></br>";
    echo"<br> alas = 15</br>";
    echo " tinggi = 5";
    define ("PHI",1/2);
    $alas=15;
    $tinggi =5;
    $luas_segitiga = PHI * $alas * $tinggi;
    echo "<br> Rumus Luas Segitiga:1/2 x $alas x $tinggi</br>";
    echo "Luas Segitiga dengan Alas: $alas dan Tinggi: $tinggi, maka :<br> ";
    echo "Luas Segitiga : $luas_segitiga <br>";
 ?>
  </body>
</html>