<?php

require_once 'class_bmipasien.php';

$bmipasien = new bmipasien();

$bmipasien->nama = $_POST['nama'];
$bmipasien->umur = $_POST['umur'];
$bmipasien->jenis_kelamin = $_POST['jk'];
$bmipasien->berat = $_POST['berat'];
$bmipasien->tinggi = $_POST['tinggi'];


$bmi = $bmipasien->hasilBMI();
$status = $bmipasien->statusBMI();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Hasil BMI Pasien</h2>
  <table border="1">
    <thead>
    <tr>
      <th>Nama</th>
      <th>Umur</th>
      <th>Jenis Kelamin</th>
      <th>Berat (kg)</th>
      <th>Tinggi (cm)</th>
      <th>BMI</th>
      <th>Status BMI</th>
    </tr>
    </thead>
    <tbody>

    <?php
        $number = 1;
    ?>

    <tr>
      <td><?php echo $bmipasien->nama; ?></td>
      <td><?php echo $bmipasien->umur; ?></td>
      <td><?php echo $bmipasien->jenis_kelamin; ?></td>
      <td><?php echo $bmipasien->berat; ?></td>
      <td><?php echo $bmipasien->tinggi; ?></td>
      <td><?php echo number_format($bmi,0,',',',',); ?></td>
      <td><?php echo $status; ?></td>
    </tr>

    <?php
        $number++;
    ?>

    </tbody>
  </table>
</body>
</html>
