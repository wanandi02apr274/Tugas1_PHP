<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Rumus Bangun datar Jajar Genjang</title>
</head>
<body>
    <h1 align="center">Bangun Datar Jajar Genjang</h1>

    <form method="POST">
        <table>
            <tr>
                <td>Panjang alas </td>
                <td>
                    <input type="text" name="panjangalas" require>
                </td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>
                    <input type="text" name="tinggi" require>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Hitung">
                <br>
                <br>
                </td>
            </tr>
        </table>
    </form>
    <?php
      if(isset($_POST['submit'])){
          $panjangalas = $_POST['panjangalas'];
          $tinggi = $_POST['tinggi'];

          $luasjajargenjang = $panjangalas * $tinggi;
          echo 'Hasil perhitungan Luas jajar genjang!';
          echo '<br> Diketahui :';
          echo '<br> Panjang Alas : '.$panjangalas;
          echo '<br> Tinggi : '.$tinggi;

          echo '<br> Maka Luasnya ' .$luasjajargenjang;
      }
    
    ?>
</body>
</html>