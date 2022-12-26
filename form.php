<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="proses.php" method="post">
  <label for="bangun_datar">Pilih Bangun Datar :</label>
  <input list="bangun-datar-pilihan" id="bangun_datar" name="bangun_datar">

  <datalist id="bangun-datar-pilihan">
    <option value="Persegi">
    <option value="PersegiPanjang">
    <option value="Segitiga">
    <option value="Lingkaran">
    <option value="Trapesium">
    <option value="JajarGenjang">
    <option value="Layang-layang">
    <option value="BelahKetupat">
    <option value="Elips">
  </datalist> <br><br>

  <label for="metode"> Pilih Metode Hitung :</label>
  <input list="hitung-metode" id="metode" name="metode">
  <datalist id="hitung-metode">
  <option value="Luas">Luas</option>
  <option value="Keliling">Keliling</option>
  </datalist>
  <br><br>
  <button>Cari Rumus</button> <br><br>
  </form>
<?php 
  if (isset($_GET['PersegiLuas'])) {
    echo'<form action="" method="post">';
    echo'<label for="sisi">Masukkan Sisi </label>';
    echo"<input type='text' name='sisi' id='sisi'></>";
    echo '<button>Hitung</button>';
    echo'</form>';
    if (isset($_POST['sisi'])) {
      $sisi =$_POST['sisi'];
      echo"Rumus = Sisi x Sisi <br>";
      echo "Luas Persegi :". $sisi*$sisi ."cm";
    }
  }elseif(isset($_GET['PersegiKeliling'])){
    echo"<form method='post' action=''>";
    echo'<label for="sisi">Masukkan Sisi </label>';
    echo"<input type='text' name='sisi' id='sisi'>";
    echo '<button>Hitung</button><br>';
    if (isset($_POST['sisi'])) {
      $sisi =$_POST['sisi'];
      echo"Rumus = 4 x Sisi <br>";
      echo "Luas Persegi :". $sisi*4 ."cm";
    }
  echo"</form>";
  }elseif(isset($_GET['PersegiPanjangLuas'])){
  echo"<form method='post' action=''>";
    echo"<label for='panjang'>Masukkan Panjang </label>";
    echo"<input type='text' name='panjang' id='panjang'>";
    echo"<br><br>";
    echo"<label for='lebar'>Masukkan Lebar </label>";
    echo"<input type='text' name='lebar' id='lebar'>";
    echo"<button>Hitung</button>";
    if (isset($_POST['panjang'])&&isset($_POST['lebar'])) {
      $panjang =$_POST['panjang'];
      $lebar =$_POST['lebar'];
      echo"<br>Rumus = Panjang * Lebar <br>";
      echo "Luas Persegi Panjang :".$panjang*$lebar."";
    }
  echo"</form>";
  }elseif(isset($_GET['PersegiPanjangKeliling'])){
  echo"<form method='post' action=''>";
  echo"<label for='panjang'>Masukkan Panjang:</label>";
  echo"<input type='text' name='panjang' id='panjang'><br><br>";
  echo"<label for='lebar'>Masukkan Lebar:</label>";
  echo"<input type='text' name='lebar' id='lebar'>";
  echo"<button>Hitung</button>";
    if (isset($_POST['panjang']) && isset($_POST['lebar'])) {
      $panjang = $_POST['panjang'];
      $lebar = $_POST['lebar'];
      $keliling = 2*($panjang+$lebar);
      echo"<br>Rumus = 2*(Panjang+Lebar)<br>";
      echo"Keliling Persegi Panjang :".$keliling." cm";
    }
  echo"</form>";
  }elseif(isset($_GET['SegitigaLuas'])){
      echo"<form method='post' action=''>";

  echo"</form>";
  }elseif(isset($_GET['SegitigaKeliling'])){
  echo"<form method='post' action=''>";

  echo"</form>";
  }elseif(isset($_GET['LingkaranLuas'])){
  echo"<form method='post' action=''>";

  echo"</form>";
  }elseif(isset($_GET['LingkaranKeliling'])){
  echo"<form method='post' action=''>";

  echo"</form>";
  }elseif(isset($_GET['TrapesiumLuas'])){
  echo"<form method='post' action=''>";

  echo"</form>";
  }elseif(isset($_GET['TrapesiumKeliling'])){
  echo"<form method='post' action=''>";

  echo"</form>";
  }elseif(isset($_GET['JajarGenjangLuas'])){
  echo"<form method='post' action=''>";

  echo"</form>";
  }elseif(isset($_GET['JajarGenjangKeliling'])){
  echo"<form method='post' action=''>";

  echo"</form>";
  }elseif(isset($_GET['Layang-layangLuas'])){
  echo"<form method='post' action=''>";

  echo"</form>";
  }elseif(isset($_GET['Layang-layangKeliling'])){
  echo"<form method='post' action=''>";

  echo"</form>";
  }elseif(isset($_GET['BelahKetupatLuas'])){
  echo"<form method='post' action=''>";

  echo"</form>";
  }elseif(isset($_GET['BelahKetupatKeliling'])){
  echo"<form method='post' action=''>";

  echo"</form>";
  }elseif(isset($_GET['ElipsLuas'])){
  echo"<form method='post' action=''>";

  echo"</form>";
  }elseif(isset($_GET['ElipsKeliling'])){


  }
  else{}
  ?>
  

</body>
</html>