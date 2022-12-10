<?php 

$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Looping For Array</title>
</head>
<body>
  <?php 
      foreach ($nama as $absen){ //Foreach akan otomatis menampilkan semua isi array
        echo "<li>$absen</li>";
      }
  

  ?>
  
</body>
</html>