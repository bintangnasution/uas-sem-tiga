<?php
$servername = 'localhost';
$username = 'root';
$password = '';
// jika koneksi db
// $dbname ="";

// $conn = new mysqli($servername,$username,$password,$dbname);
$conn = new mysqli($servername,$username,$password);

if ($conn->connect_error) {
  die("Koneksi gagal");
}

echo "Koneksi Berhasil";

// $sql ="INSERT INTO tablename(att1,att2)VALUES('','')";
// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
// $conn->close();

?>