<!-- BIODATA MAHASISWA -->
<?php
  //PROSES EKSEKUSI BIODATA
    $_nama = $_POST['nama'] ;
    $_matkul = $_POST['matkul'] ;
    $_uts =  $_POST['uts'] ;
    $_uas = $_POST['uas'] ;
    $_tugas = $_POST['tugas'] ;
    $_total = ($_uts * 30 / 100) + ($_uas * 35 / 100) + ($_tugas * 35 / 100);
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
    echo '<br> <br>   Persentase Nilai    :   '   .$_total  , "%"    ;
    echo '<br> Kamu  Dinyatakan    :   '  .$grade;
?>


<!-- MODIFIKASI  >      GRADE NILAI -->
<?php
    //PROSES EKSEKUSI NILAI UTS, UAS, TUGAS
    if($_uts && $_uas && $_tugas >= 85    &&  $_uts && $_uas && $_tugas <= 100){
        $grade = "A";
    }elseif($_uts && $_uas && $_tugas >=70     && $_uts && $_uas && $_tugas <= 84){
        $grade = "B";
    }elseif($_uts && $_uas && $_tugas >= 56   &&  $_uts && $_uas && $_tugas <= 69){
        $grade = "C";
    }elseif($_uts && $_uas && $_tugas >= 36   &&  $_uts && $_uas && $_tugas <= 55){
        $grade = "D";
    }elseif($_uts && $_uas && $_tugas >= 0    &&  $_uts && $_uas && $_tugas <=35){
        $grade = "E";
    }elseif($_uts && $_uas && $_tugas < 0 &&  $_uts && $_uas && $_tugas >100){
        $grade = "I";
    }else{
        $grade = "Ada Yang Salah Dengan Penilaian Kamu";
    }
    echo '<br> <br> Grade Nilai Kamu Adalah :   '   .$grade;
?>


<!-- MODIFIKASI  >    PREDIKAT NILAI -->
<?php
    //PROSES EKSEKUSI PREDIKAT NILAI DARI HASIL GRADE
    if($grade == "A"){
        $predikat = "Sangat Memuaskan";
    }elseif($grade == "B"){
        $predikat = "Memuaskan";
    }elseif($grade == "C"){
        $predikat = "Cukup";
    }elseif($grade == "D"){
        $predikat = "Kurang";
    }elseif($grade == "E"){
        $predikat = "Sangat Kurang";
    }elseif($grade == "I"){
        $predikat = "Tidak Ada Grade";
    }else{
        $predikat = "Tidak Ada";
    }
    echo '<br/> Predikat Nilai Kamu    :   ' .$predikat;
    echo '<br>  =================================';
?>