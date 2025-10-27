<?php
// Contoh data mahasiswa (bisa kamu ganti nanti dengan database)
$mahasiswa = [
    ["NIM" => "23001", "Nama" => "Andi Pratama", "Jurusan" => "Informatika", "Semester" => 3],
    ["NIM" => "23002", "Nama" => "Budi Santoso", "Jurusan" => "Sistem Informasi", "Semester" => 2],
    ["NIM" => "23003", "Nama" => "Citra Dewi", "Jurusan" => "Teknik Komputer", "Semester" => 4],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - KSI 2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">KSI 2025</a>
  </div>
</nav>

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">Data Mahasiswa</h4>
    </div>
    <div class="card-body">
      <table class="table table-bordered table-striped">
        <thead class="table-primary text-center">
          <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Semester</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach ($mahasiswa as $mhs): ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $mhs["NIM"] ?></td>
            <td><?= $mhs["Nama"] ?></td>
            <td><?= $mhs["Jurusan"] ?></td>
            <td><?= $mhs["Semester"] ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<footer class="text-center mt-4 mb-3 text-muted">
  &copy; <?= date("Y") ?> KSI 2025 | PHP Native + Bootstrap
</footer>

</body>
</html>
