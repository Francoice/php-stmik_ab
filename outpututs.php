<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Komentar</title>
</head>
<body>
<h1>PT.GRAHA MOBILINDO</h1>
<hr>

<p> Nama Pelanggan :  <?php echo $_POST["nama"]; ?></p>
<p> Nomor KTP : <?php echo $_POST["nomor"]; ?></p> 
<p> Alamat : <?php echo $_POST["alamat"]; ?></p>
<p> Nomor HP : <?php echo $_POST["Nomor"]; ?></p>
<p> Merk Mobil : <?php echo $_POST["merk"]; ?></p>
<p> Jumlah Unit : <?php echo $_POST["jumlah"]; ?></p>
<p> Harga Mobil : <?php echo $_POST["harga"]; ?></p>

<a href="inpututs.php">Input data Lagi</a>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Output Mobile</title>
  <style>
    h1 {
      border-bottom: 1px solid #000;
      line-height: 3rem;
    }
  </style>
</head>
<body>
  <?php 
    $name = $_POST["name"];
    $number = $_POST["number"];
    $address = $_POST["address"];
    $numbercall = $_POST["numbercall"];
    $brands = $_POST["brands"];
    $total = $_POST["total"];
    $price = $_POST["price"];
    $previous = "inpututs.php";
  ?>
  <pre>
  <h1>PT.Graha Mobilindo</h1>

  Nama Pelanggan : <?= $name?>

  Nomor KTP      : <?= $number?>

  Alamat         : <?= $address?>

  Nomor HP       : <?= $numbercall?>

  Merk Mobil     : <?= $brands?>

  Jumlah Unit    : <?= $total?>

  Harga Mobil    : <?= $price?>
  </pre>
  <h3><a href="inpututs.php">INPUT DATA LAGI</a></h3>
</body>
</html>