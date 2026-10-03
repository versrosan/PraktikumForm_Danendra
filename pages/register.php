<?php
 include '../services/db.php';
 session_start();
 $register_message = "";

 if(isset($_SESSION["is_login"])) {
    header("Location: dashboard.php");
 }
 if(isset($_POST['register'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash_password = hash("sha256", $password);

   try { $sql = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$hash_password')"; 
    if($db->query($sql)) { $register_message = "Akun Berhasil Dibuat!"; 
        } else { $register_message = "Akun Gagal Dibuat!"; } 
    } catch (mysqli_sql_exception) { $register_message = "User Sudah Ada Atau Sudah digunakan!"; 
    } $db->close();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Form Danendra</title>
</head>
<body>
    <?php include "../layout/header.php"; ?>
    <form action=register.php method="POST">
        <fieldset>
            <legend>Register</legend>
            <label>Nama Lengkap</label>
            <input type="text" name="name" placeholder="Masukkan Nama Anda">
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan Username Anda">
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan Email Anda">
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan Password Anda">
            <label>Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
            <label>Agama</label>
            <select>
                <option>--Agama Anda--</option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katolik</option>
                <option>Hindu</option>
                <option>Buddha</option>
                <option>Konghucu</option>
            </select>
            <button type="submit" name="register">Daftar!</button>
            <input type="checkbox" name="ingetgweh">
            <label>Ingat Saya</label>
        </fieldset>
    </form>
    <?php include "../layout/footer.php"; ?>
</body>
</html>