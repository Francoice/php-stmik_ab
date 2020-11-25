<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<form action="outputdatakaryawan.php" method="POST">
<table align="center"border="1" cellpadding="2" cellspacing="2">
    <tr align="center"><td><h2> <b>DATA KARYAWAN</b></h2></td></tr>
        <tr>
        <td>
<table width="500" border="0" cellpadding="2" cellspacing="3" align="center"></td><br>
<tr>
            <td>Nama</td>
            <td>: </td>
            <td><input name="nama" type="text" size="40"/>
            </td>
</tr>

    <tr>
            <td>Alamat</td>
            <td> : </td>
            <td> <textarea name="mesage" rows="2" cols="42"></textarea></td><br>
    </tr>

    <tr>
            <td> Tempat Tanggal Lahir</td>
            <td>:</td>
            <td><input name ="ttl" type="text" size="40"/>
            </td>
     </tr>

     <tr>
      <td>Jumlah Anak</td>
      <td> : </td>
      <td>
      <input type='radio' name='jumlah_anak' value='satu'> <label for="satu"> Satu </label>
      <input type='radio' name='jumlah_anak' value='dua'> <label for="dua"> Dua </label>
      <input type="radio" name="jumlah_anak" value="tiga"> <label for="tiga"> Tiga </label>
     </td>
     </tr>


     <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
          <td>
          <input type="radio" name="jk" value="Laki-Laki"><label for="laki">Laki-Laki</label>
          <input type="radio" name="jk" value="Perempuan"><label for="Perempuan">Perempuan</label>
          </td>
     </tr>

     <tr>
     <td>Agama</td>
     <td> : </td>
     <td>    
     <select name="combo" value="combo">
        <option>Islam</option>
        <option>Kristen</option>
        <option>Budha</option>
        <option>Hindu</option>
    </select>
    </td>
    </tr>

     <tr>
     <td> Pendidikan</td>
     <td> : </td>
     <td>
     <select name="pdk" value="pdk">
     <option>SMA</option>
     <option>S1</option>
     <option>S2</option>
     </td>
     </tr>

     <tr>
     <td>Alamat</td>
     <td> : </td>
     <td>
     <input type="text" id="address" name="address" value="">
     </td>
     </tr>

     <tr>
     <td>Hobi</td>
     <td>:</td>
     <td> <input name="hobi" type="text" size="40" /></td>
     </tr>

    <tr>
    <td>
    <input type="submit" name="submit" value="Kirim"/>
    </td>
    <td>
    <input type="reset" name="reset" value="Batal"/>
    </td>
    </tr>
    
    </table>
    </td>
    </td>
    </tr>
    </table>
    </form>
    </html>


