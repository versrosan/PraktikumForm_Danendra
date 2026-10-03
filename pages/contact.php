<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Rosan</title>
    <link rel="stylesheet" href="../css/globals.css">
</head>
<body>
    <?php include "../layout/header.php"; ?>
    <main class="page-content form-page">
    <form action="contact.php" method="POST">
        <fieldset>
            <legend>Hubungi Saya (Danendra)</legend>
            <label>Nama</label>
            <input type="text" name="name" placeholder="Masukkan Nama Anda">
            <label>Subject</label>
            <input type="text" name="subject" placeholder="Saran Atau Keperluan">
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan Email Anda">
            <button type="submit">Kirim!</button>
        </fieldset>
    </form>
    </main>
    <?php include "../layout/footer.php"; ?>
</body>
</html>
