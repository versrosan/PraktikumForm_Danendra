<?php
    include "../services/db.php";
    session_start();
    $login_messages = "";

    if(isset($_SESSION["is_login"])) {
        header("Location: dashboard.php");
        exit;
    }
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash_password = hash("sha256", $password);

        $sql = "SELECT * FROM  users WHERE
        username = '$username' AND password = '$hash_password'";
        $result = $db->query($sql);
        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            $_SESSION["username"] = $data["username"];
            $_SESSION["is_login"] = true;

            header("Location: dashboard.php");
            exit;
        } else {
            $login_messages = "Login Gagal!";
        }
        $db->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Form Danendra</title>
    <link rel="stylesheet" href="../css/globals.css">
</head>
<body>
    <?php include "../layout/header.php"?>
    <main class="page-content form-page">
    <i class="form-message"><?php echo "$login_messages"?></i>
    <form action=login.php method="POST">
        <fieldset>
            <legend>Login</legend>
            <label>Username</label>
            <input type="text" name="username">
            <label>Password</label>
            <input type="password" name="password">
            <button type="submit" name="login">Login!</button>
            <input type="checkbox" name="ingetgweh">
            <label>Ingat Saya</label>
        </fieldset>
    </form>
    </main>
    <?php include "../layout/footer.php"?>
</body>
</html>
