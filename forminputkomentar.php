<DOCTYPE html>
<head>
    <title>Input Komentar</title>
    <style>
    .paragraph {
      border-bottom: 1px solid #999;
      padding-bottom: 1rem;
      margin-bottom: 2rem;
    }
    .paragraph > p{
      margin:0
    }
    form > div {
    margin: .5rem 0;
    }
    form > input [type=reset] {
      margin-left: 5rem;
    }
    </style>
  </head>
  <body>
  <h1> BUKU TAMU </h1>
  <div class="paragraph">
   <p>Komentar dan Saran Anda Sangat Kami Butuhkan</p>
   <p>Untuk Meningkatkan Kualitas Situs Kami</p>
   </div>
   <form action="tampilankomentar.php" method="post" enctype="multipart/form-data">
   <div class="nama">
   <label for="nama">Nama Anda: </label>
   <input name="nama" type="text">
   </div>
   <div class="email">
   <label for="email">Email Anda: </label>
   <input name="email" type="email">
   </div>
   <div class="comment">
   <label for="comment">Komentar: &nbsp;&nbsp;</label>
   <textarea name="comment" cols="30" rows="10"></textarea>
   </div>
   <input type="reset" value="Batal">
   <input type="submit" value="Kirim">
   </form>
    </body>
</html>