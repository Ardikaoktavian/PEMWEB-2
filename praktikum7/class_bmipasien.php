<?php

class bmipasien {
  public $nama;
  public $umur;
  public $jenis_kelamin;
  public $berat;
  public $tinggi;

  public function hasilBMI() {
    $tinggi_m = $this->tinggi / 100;
    $bmi = $this->berat / ($tinggi_m * $tinggi_m);
    return $bmi;
  }

  public function statusBMI() {
    $bmi = $this->hasilBMI();
    if ($bmi < 18.5) {
      return "Kekurangan Berat Badan";
    } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
      return "Normal (ideal)";
    } elseif ($bmi >= 25 && $bmi <= 29.9) {
      return "Kelebihan Berat Badan";
    } else {
      return "Kegemukan (obesitas)";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Form BMI Pasien</title>
</head>
<body>
  <h1>Form BMI Pasien</h1>
  <form method="post" action="proses_bmi.php">
    <label for="nama"><b>Nama :</b></label>
    <input type="text" id="nama" name="nama">
    <br>
    <br>
    <label for="umur"><b>Umur :</b></label>
    <input type="text" id="umur" name="umur">
    <br>
    <br>
    <label for="jk"><b>Jenis Kelamin :</b></label>
    <input type="radio" id="laki_laki" name="jk" value="Laki-laki">
    <label for="laki_laki">Laki-laki</label>
    <input type="radio" id="perempuan" name="jk" value="Perempuan">
    <label for="perempuan">Perempuan</label>
    <br>
    <br>
    <label for="berat"><b>Berat (kg)  :</b></label>
    <input type="text" id="berat" name="berat">
    <br>
    <br>
    <label for="tinggi"><b>Tinggi (cm)  :</b></label>
    <input type="text" id="tinggi" name="tinggi">
    <br>
    <br>
    <input type="submit" name="proses" value="Hitung BMI">
  </form>
</body>
</html>

