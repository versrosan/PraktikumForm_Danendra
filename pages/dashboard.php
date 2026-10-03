<?php
session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/globals.css">
</head>
<body>

    <?php include "../layout/header.php"?>

    <main class="page-content dashboard-page">
    <h1>Selamat Datang di Dashboard</h1>

    <p>Selamat Datang Kembali, <?php echo $_SESSION["username"]; ?>!</p>

    <h2>Menu</h2>

    <div class="menu-links">
        <a href="biodata.php">Biodata</a>
        <a href="contact.php">Contact</a>
    </div>

    <br><br>

    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>
    </main>

    <?php include "../layout/footer.php" ?>

</body>
</html>
