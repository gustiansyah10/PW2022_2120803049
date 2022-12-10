<?php 

$asean = [
        "Indonesia" => "D.K.I Jakarta",
        "Singapura" => "Singapura",
        "Malaysia" => "Kuala Lumpur",
        "Brunei " => "Bandar Seri Begawan",
        "Thailand" => "Bangkok",
        "Laos" => "Vientiane",
        "Filipina" => "Manila",
        "Myanmnar" => "Naypydaw",
];
// untuk memasukkan value , kita harus membuat key yang merepresentasikan
// valuenya, tanda "=>" dapat diartikan sebagai merujuk
//"Key" => "Value"


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <title>Array Associative</title>
</head>
<body>
  <h1>DAFTAR NEGARA ASEAN dan ibukotanya :</h1>
  <?php foreach ($asean as $negara => $ibukota) :?>
    <li><?php echo "$negara : $ibukota" ?></li>
    <?php endforeach ?>
  
</body>
</html>