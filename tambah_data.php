<?php
include 'koneksi.php';

$sql = "INSERT INTO users (nama, email) VALUES ('Fitri', 'fitri@example.com')";
if ($conn->query($sql) === TRUE) {
  echo "Data berhasil ditambahkan!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
