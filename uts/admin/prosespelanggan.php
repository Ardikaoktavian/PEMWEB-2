<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_id_pelanggan = $_POST['id_pelanggan'];
   $_email_pelanggan = $_POST['email_pelanggan'];
   $_password_pelanggan = $_POST['password_pelanggan'];
   $_nama_pelanggan = $_POST['nama_pelanggan'];
   $_telepon_pelanggan = $_POST['telepon_pelanggan'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id_pelanggan; // ? 1
   $ar_data[]=$_email_pelanggan;// 2
   $ar_data[]=$_password_pelanggan;// 3
   $ar_data[]=$_nama_pelanggan;// 4
   $ar_data[]=$_telepon_pelanggan;// 5

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pelanggan (id_pelanggan,email_pelanggan,password_pelanggan,
    nama_pelanggan,telepon_pelanggan) VALUES (?,?,?,?,?)";
   }else if($_proses == "edit"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE pelanggan SET id_pelanggan=?,email_pelanggan=?,password_pelanggan=?,nama_pelanggan=?,
    telepon_pelanggan=? WHERE id=?";
   }
   if(isset($sql)){
    $stmt = $conn->prepare($sql);
    $stmt->execute($ar_data);
   }

   header('location:index.php?halaman=pelanggan');
?>