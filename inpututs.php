<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Mobile</title>
  <style>
  .paragraph {
    border-bottom: 1px solid #999;
    padding-bottom: 1rem;
    margin-bottom: 2rem;
  }
  .paragraph > p{
    margin: 0
  }
  form > div {
    margin: .5rem 0;
  }
  form > input[type=reset] {
    margin-left: 5rem;
  }
  </style>
</head>
<body>
  <h1>PT.Graha Mobilindo</h1>

  <form action="outpututs.php" method="post" id="feedback-form">
    <div style="display: flex;">
      <label for="name" style="width: 10%;"> Nama Pelanggan </label> :&nbsp;&nbsp;
      <input name="name" type="text" style="width: 20%;">
    </div>
    <div style="display: flex;">
      <label for="number" style="width: 10%;"> Nomor KTP </label> :&nbsp;&nbsp;
      <input name="number" type="number" style="width: 20%">
    </div>
    <div style="display: flex;">
    <label for="address" style="width: 10%;"> Alamat </label> :&nbsp;&nbsp;
    <input name="address" type="address" style="width: 30%">
    </div>
    <div style="display: flex;">
    <label for="numbercall" style="width: 10%;"> Nomor HP </label> :&nbsp;&nbsp;
    <input name="numbercall" type="numbercall" style="width: 20%">
    </div>
    <div style="display: flex;">
    <label for="brands" style="width: 10%;"> Merk Mobil </label> :&nbsp;&nbsp;
    <input name="brands" type="brands" style="width: 20%">
    </div>
    <div style="display: flex;">
    <label for="total" style="width: 10%;"> Jumlah Unit </label> :&nbsp;&nbsp;
    <input name="total" type="total" style="width: 20%">
    </div>
    <div style="display: flex;">
    <label for="price" style="width: 10%;"> Harga Mobil </label> :&nbsp;&nbsp;
    <input name="price" type="price" style="width: 20%">
    </div>
    <div style="float: left;">
    <input type="submit" value="Kirim">
    <input type="reset" value="Batal">
    </div>
  </form>
  
</body>
</html>