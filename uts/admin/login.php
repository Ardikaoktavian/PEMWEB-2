<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="assets/css/stylelogin.css" media="screen" title="no title">
    <title>Login Page</title>
    <link rel="icon" type="image/x-icon" href="assets/img/login.png" />
</head>
<body>
    <form method="POST">
    <div class="input">
        <h1>LOGIN</h1>
        <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" placeholder="Email" name="email">
        </div>
        <div class="box-input">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="password" name="password">
        </div>
        <button  name="login" class="btn-input">Login</button>
    </div>
    </form>
    

    <?php
require_once 'dbkoneksi.php';

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // query ke database
    $stmt = $conn->prepare("SELECT * FROM pelanggan WHERE email_pelanggan=:email AND password_pelanggan=:password");
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) { // jika data ditemukan
        session_start();
        $_SESSION['id_pelanggan'] = $result['id_pelanggan'];
        $_SESSION['email_pelanggan'] = $result['email_pelanggan'];
        header('Location: index.php');
        exit();
    } else { // jika data tidak ditemukan
        echo "email : arif1@gmail.com";
        echo "<br>";
        echo "password : arif";
    }
}
?>

</body>
</html>