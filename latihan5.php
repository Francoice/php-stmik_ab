<!DOCTYPE html>
  <head>
    <title></title>
  </head>

  <body>
<?php
$bil1=30;
$bil2=40;
$bil3=57;
$bil4=63;
$bil5=20;
$teks1="Diketahui:";
$teks2="bil1=30,bil2=45,bil3=57,bil4=63,bil5=20";
$teks3="Hasil Dari:(1/0)";


echo"Diketahui:";
echo"<br><b>bil1 = 30, bil2 = 45, bil3 = 57, bil4 = 63, bil5 = 20</b></br>";
echo "<br> Hasil Dari : (1/0) </br>";

$hasil=$bil1<$bil2;
echo "1. $bil1<$bil2 = ....<br>";

$hasil=$bil3<>$bil4;
echo "2. $bil3<>$bil4 = ....<br>";

$hasil=$bil2==$bil4;
echo "3. $bil2==$bil4 = ....<br>";

$hasil=!($bil4>$bil1);
echo "4. !($bil3>$bil4) = ....<br>";

$hasil=($bil5<>$bil1) || !($bil2==$bil4);
echo "5. ($bil5<>$bil1) or !($bil2==$bil4) = ....<br>";

$hasil=!($bil2<>$bil4) && !($bil1<=$bil3);
echo "6. !($bil2<>$bil4) and !($bil1<=$bil3) = ....<br>";


$teks1="Belajar Menghitung";
$teks2="Volume Balok";
$teks3="Menggunakan Operator Aritmatika";
$panjang =10;
$lebar =7;
$tinggi=15;
$volume = $panjang * $lebar * $tinggi;

$hasil=$teks1.$teks2.$teks3;
// echo "<br>$hasil</br>";
echo "<br>Belajar Menghitung Volume Balok Menggunakan Operator Aritmatika </br>";
echo "Panjang Balok = 10 <br>";
echo "Lebar Balok = 7 <br>";
echo "Tinggi Balok = 15 <br>";
$volume= $panjang * $lebar * $tinggi;
echo "Volume Balok = $volume <br>";

?>