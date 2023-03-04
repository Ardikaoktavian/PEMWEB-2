<!-- BIODATA MAHASISWA -->
<?php
  //PROSES EKSEKUSI BIODATA
    $_nama = $_POST['nama'] ;
    $_matkul = $_POST['matkul'] ;
    $_uts =  $_POST['uts'] ;
    $_uas = $_POST['uas'] ;
    $_tugas = $_POST['tugas'] ;
    $_total = ($_uts * 30 / 100) + ($_uas * 35 / 100) + ($_tugas * 35 / 100);
    $_range = (($_uts+$_uas+$_tugas)/3);
    echo '<br>  =================================';
    echo '<br> Nama Mahasiswa : ' .$_nama;
    echo '<br> Mata Kuliah :    ' .$_matkul;
    echo '<br> Nilai UTS :  ' .$_uts;
    echo '<br> Nilai UAS :  ' .$_uas;
    echo '<br> Nilai Tugas :    ' .$_tugas;
    echo '<br>  =================================';
?>


<!-- MODIFIKASI FILE BIODATA >    DENGAN  LULUS / TIDAK LULUS -->
<?php
    //PROSES EKSEKUSI TOTAL
    if($_total > 55){
        $grade  = "LULUS";
    } else {
        $grade = "TIDAK LULUS";
    }
    // MAHASISWA  DINYATAKAN LULUS APABILA PERSENTASE MELEBIHI 55%
    // DENGAN KETENTUAN 30% UTS - 35% UAS- 35% TUGAS
    echo '<br> <br>   Persentase Nilai    :   '   .$_total  , "%" ;
    echo '<br>  Range Nilai :   '   . number_format($_range,0,',',',',);
    echo '<br> Kamu  Dinyatakan    :   '  .$grade;
?>


<!-- MODIFIKASI >    RANGE NILAI & GRADE -->
<?php
// PROSES EKSEKUSI RANGE NILAI UTS, UAS, TUGAS
    if($_range >=85 && $_range <=100){
        $rn = "A";
    }elseif($_range >=70     && $_range <= 84){
        $rn = "B";
    }elseif($_range >= 56   &&  $_range <= 69){
        $rn = "C";
    }elseif($_range >= 36   &&  $_range <= 55){
        $rn = "D";
    }elseif($_range >= 0    &&  $_range <=35){
        $rn = "E";
    }elseif($_range < 0 &&  $_range >100){
        $rn = "I";
    }else{
        $rn = "Ada Yang Salah Dengan Penilaian Kamu";
    }
    echo '<br> <br> Grade Nilai Kamu Adalah :   '   .$rn;
?>


<!-- MODIFIKASI  >    PREDIKAT NILAI -->
<?php
    //PROSES EKSEKUSI PREDIKAT NILAI DARI HASIL GRADE
    if($rn == "A"){
        $predikat = "Sangat Memuaskan";
    }elseif($rn == "B"){
        $predikat = "Memuaskan";
    }elseif($rn == "C"){
        $predikat = "Cukup";
    }elseif($rn == "D"){
        $predikat = "Kurang";
    }elseif($rn == "E"){
        $predikat = "Sangat Kurang";
    }elseif($rn == "I"){
        $predikat = "Tidak Ada Grade";
    }else{
        $predikat = "Tidak Ada";
    }
    echo '<br/> Predikat Nilai Kamu    :   ' .$predikat;
    echo '<br>  =================================';
?>