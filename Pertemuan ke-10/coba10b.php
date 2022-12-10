<?php 

$mahasiswa = [
  [
    "Nama" => "Joni",
    "NIM"  => "123456",
    "Jurusan" => "Sistem Informasi",
    "Email" => "joni@gmail.com",
    "Gambar" => "gambar1.jpg"
  ],
  [
    "Nama" => "Budi",
    "NIM"  => "123457",
    "Jurusan" => "Ilmu Komputer",
    "Email" => "Budi@gmail.com",
    "Gambar" => "gambar2.jpg"
  ],
  [
    "Nama" => "Rani",
    "NIM"  => "123458",
    "Jurusan" => "Rani",
    "Email" => "Tarbiyah",
    "Gambar" => "gambar3.jpg"
  ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>Nama :<?= $mhs["Nama"];?></li>
      <li>NIM :<?= $mhs["NIM"];?></li>
      <li>Jurusan :<?= $mhs["Jurusan"];?></li>
      <li>Email :<?= $mhs["Email"];?></li>
    </ul>
    <?php endforeach; ?>
  
</body>
</html> 