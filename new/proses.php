<?php
    if (isset($_GET['hasilLP'])) {
      LuasPersegi();
      die();
    }
    
    if (isset($_GET['hasilKP'])) {
      KelilingPersegi();
      die();
    }

    if (isset($_GET['hasilLPP'])) {
      LuasPersegiPanjang();
      die();
    }
    if (isset($_GET['hasilKPP'])) {
      KelilingPersegiPanjang();
      die();
    }
    if (isset($_GET['hasilLS'])) {
      LuasSegitiga();
      die();
    }
    if (isset($_GET['hasilKS'])) {
      KelilingSegitiga();
      die();
    }
    if (isset($_GET['hasilLL'])) {
      LuasLingkaran();
      die();
    }
    if (isset($_GET['hasilKL'])) {
      KelilingLingkaran();
      die();
    }
    if (isset($_GET['hasilLT'])) {
      LuasTrapesium();
      die();
    }
    if (isset($_GET['hasilKT'])) {
      KelilingTrapesium();
      die();
    }
    if (isset($_GET['hasilLJG'])) {
      LuasJajarGenjang();
      die();
    }
    if (isset($_GET['hasilKJG'])) {
      KelilingJajarGenjang();
      die();
    }
    if (isset($_GET['hasilLLL'])) {
      LuasLayangLayang();
      die();
    }
    if (isset($_GET['hasilKLL'])) {
      KelilingLayangLayang();
      die();
    }
    if (isset($_GET['hasilLBK'])) {
      LuasBelahKetupat();
      die();
    }
    if (isset($_GET['hasilKBK'])) {
      KelilingBelahKetupat();
      die();
    }


$bangun_datar= $_POST['bangun_datar'];
$metode= $_POST['metode'];


if ($bangun_datar=='Persegi') {
  if($metode == 'Luas'){
    echo 'Luas '.$bangun_datar.'';
    echo'<form method="post" action="proses.php?hasilLP">';
    echo'<input type="text" name="sisi">';
    echo"<button>Hitung</button>";
    echo"</form>";

    
  }else{
    echo 'Keliling '.$bangun_datar.'';
    echo'<form method="post" action="proses.php?hasilKP">';
    echo'<input type="text" name="sisi">';
    echo"<button>Hitung</button>";
    echo"</form>";
  }
}
if ($bangun_datar=='PersegiPanjang') {
  if($metode == 'Luas'){
    echo 'Luas '.$bangun_datar.'';
    echo'<br><br><form method="post" action="proses.php?hasilLPP">';
    echo'Masukkan Panjang :<input type="text" name="panjang"><br><br>';
    echo'Masukkan Lebar :<input type="text" name="lebar"><br>';
    echo"<br><button>Hitung</button>";
    echo"</form>";
  }else{
    echo 'Keliling '.$bangun_datar.'';
    echo'<br><br><form method="post" action="proses.php?hasilKPP">';
    echo'Masukkan Panjang :<input type="text" name="panjang"><br><br>';
    echo'Masukkan Lebar :<input type="text" name="lebar"><br>';
    echo"<br><button>Hitung</button>";
    echo"</form>";
  }  
}
if ($bangun_datar=='Segitiga') {
  if($metode == 'Luas'){
    echo 'Luas '.$bangun_datar.'';
    echo'<br><br><form method="post" action="proses.php?hasilLS">';
    echo'Masukkan Alas :<input type="text" name="alas"><br><br>';
    echo'Masukkan Tinggi :<input type="text" name="tinggi"><br>';
    echo"<br><button>Hitung</button>";
    echo"</form>";
  }else{
    echo 'Keliling '.$bangun_datar.'';
    echo'<br><br><form method="post" action="proses.php?hasilKS">';
    echo'Masukkan Alas :<input type="text" name="alas"><br><br>';
    echo'Masukkan Tinggi :<input type="text" name="tinggi"><br><br>';
    echo'Masukkan Miring :<input type="text" name="miring"><br>';
    echo"<br><button>Hitung</button>";
    echo"</form>";
  }  
}
if ($bangun_datar=='Lingkaran') {
  if($metode == 'Luas'){
    echo 'Luas '.$bangun_datar.'';
    echo'<br><br><form method="post" action="proses.php?hasilLL">';
    echo'Masukkan Jari Jari :<input type="text" name="jari"><br><br>';
    echo"<br><button>Hitung</button>";
    
  }else{
    echo 'Keliling '.$bangun_datar.'';
    echo'<br><br><form method="post" action="proses.php?hasilKL">';
    echo'Masukkan Jari Jari :<input type="text" name="jari"><br><br>';
    echo"<br><button>Hitung</button>";
  }  
}
if ($bangun_datar=='Trapesium') {
  if($metode == 'Luas'){
    echo 'Luas '.$bangun_datar.'';
    echo'<br><br><form method="post" action="proses.php?hasilLT">';
    echo'Masukkan Sisi A :<input type="text" name="sisia"><br><br>';
    echo'Masukkan Sisi B :<input type="text" name="sisib"><br><br>';
    echo'Masukkan Tinggi :<input type="text" name="tinggi"><br>';
    echo"<br><button>Hitung</button>";
    echo"</form>";
  }else{
    echo 'Keliling '.$bangun_datar.'';
    echo'<br><br><form method="post" action="proses.php?hasilKT">';
    echo'Masukkan Sisi A :<input type="text" name="sisia"><br><br>';
    echo'Masukkan Sisi B :<input type="text" name="sisib"><br><br>';
    echo'Masukkan Sisi C :<input type="text" name="sisic"><br><br>';
    echo'Masukkan Sisi D :<input type="text" name="sisid"><br><br>';
    echo"<br><button>Hitung</button>";
    echo"</form>";
  }  
}
if ($bangun_datar=='JajarGenjang') {
  if($metode == 'Luas'){
    echo 'Luas '.$bangun_datar.'';
    echo'<br><br><form method="post" action="proses.php?hasilLJG">';
    echo'Masukkan Alas :<input type="text" name="alas"><br><br>';
    echo'Masukkan Tinggi :<input type="text" name="tinggi"><br><br>';
    echo"<br><button>Hitung</button>";

  }else{
    echo 'Keliling '.$bangun_datar.'';
    echo'<br><br><form method="post" action="proses.php?hasilKJG">';
    echo'Masukkan Sisi A :<input type="text" name="sisia"><br><br>';
    echo'Masukkan Sisi B :<input type="text" name="sisib"><br><br>';
    echo"<br><button>Hitung</button>";
    echo"</form>";
  }  
}
if ($bangun_datar=='Layang-layang') {
  if($metode == 'Luas'){
    echo 'Luas '.$bangun_datar.'';
    echo'<br><br><form method="post" action="proses.php?hasilLLL">';
    echo'Masukkan Diagonal 1 :<input type="text" name="dig1"><br><br>';
    echo'Masukkan Diagonal 2 :<input type="text" name="dig2"><br><br>';
    echo"<br><button>Hitung</button>";
    echo"</form>";
  }else{
    echo 'Keliling '.$bangun_datar.'';
    echo'<br><br><form method="post" action="proses.php?hasilKLL">';
    echo'Masukkan Sisi Sejajar A :<input type="text" name="sisia"><br><br>';
    echo'Masukkan Sisi Sejajar B :<input type="text" name="sisib"><br><br>';
    echo"<br><button>Hitung</button>";
    echo"</form>";
  }  
}
if ($bangun_datar=='BelahKetupat') {
  if($metode == 'Luas'){
    echo 'Luas '.$bangun_datar.'';
    echo'<br><br><form method="post" action="proses.php?hasilLBK">';
    echo'Masukkan Diagonal 1 :<input type="text" name="dig1"><br><br>';
    echo'Masukkan Diagonal 2 :<input type="text" name="dig2"><br><br>';
    echo"<br><button>Hitung</button>";
    echo"</form>";
  }else{
    echo 'Keliling '.$bangun_datar.'';
    echo'<br><br><form method="post" action="proses.php?hasilKBK">';
    echo'Masukkan Sisi A :<input type="text" name="sisia"><br><br>';
    echo"<br><button>Hitung</button>";
    echo"</form>";
  }  
}





function LuasPersegi() {
  if (isset($_POST['sisi'])) {
    echo $_POST['sisi']*$_POST['sisi'];
  }
  
}

function KelilingPersegi(){
  if (isset($_POST['sisi'])) {
    echo $_POST['sisi']*4;
  }
}

function LuasPersegiPanjang(){
  if (isset($_POST['panjang']) || isset($_POST['lebar'])) {
    echo $_POST['panjang']*$_POST['lebar'];
  }
}
function KelilingPersegiPanjang(){
  if (isset($_POST['panjang']) || isset($_POST['lebar'])) {
    echo 2*($_POST['panjang']+$_POST['lebar']);
  }
}
function LuasSegitiga(){
  if (isset($_POST['alas'])||isset($_POST['tinggi'])) {
    echo $_POST['alas']*$_POST['tinggi']*(1/2);
  }
}
function KelilingSegitiga(){
  if (isset($_POST['alas'])||isset($_POST['tinggi'])||isset($_POST['miring'])) {
    echo $_POST['alas']+$_POST['tinggi']+$_POST['miring'];
  }
}
function LuasLingkaran(){
  if (isset($_POST['jari'])) {
    echo $_POST['jari']*$_POST['jari']*3.14;
  }
}
function KelilingLingkaran(){
  if (isset($_POST['jari'])) {
    echo $_POST['jari']*3.14*2;
  }
}
function LuasTrapesium(){
  if (isset($_POST['sisia'])||isset($_POST['sisib'])||isset($_POST['tinggi'])) {
    echo ($_POST['sisia']+$_POST['sisib'])*$_POST['tinggi']/2;
  }
}
function KelilingTrapesium(){
  if (isset($_POST['sisia'])||isset($_POST['sisib'])||isset($_POST['sisic'])||isset($_POST['sisid'])) {
    echo $_POST['sisia']+$_POST['sisib']+$_POST['sisic']+$_POST['sisid'];
  }
}
function LuasJajarGenjang(){
  if (isset($_POST['alas'])||isset($_POST['tinggi'])) {
    echo $_POST['alas']*$_POST['tinggi'];
  }
}
function KelilingJajarGenjang(){
  if (isset($_POST['sisia'])||isset($_POST['sisib'])) {
    echo (2*$_POST['sisia'])+(2*$_POST['sisib']);
  }
}
function LuasLayangLayang(){
  if (isset($_POST['dig1'])||isset($_POST['dig2'])) {
    echo ($_POST['dig1']*$_POST['dig2'])/2;
  }
}
function KelilingLayangLayang(){
  if (isset($_POST['sisia'])||isset($_POST['sisib'])) {
    echo (2*$_POST['sisia'])+(2*$_POST['sisib']);
  }
}
function LuasBelahKetupat(){
  if (isset($_POST['dig1'])||isset($_POST['dig2'])) {
    echo ($_POST['dig1']*$_POST['dig2'])/2;
  }
}
function KelilingBelahKetupat(){
  if (isset($_POST['sisia'])) {
    echo 4*$_POST['sisia'];
  }
}


?>