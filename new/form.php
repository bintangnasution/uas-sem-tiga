<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Bangun Datar</title>
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
  
</body>
</html>