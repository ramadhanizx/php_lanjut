<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload gambar</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{tulis nim anda disimi}">
    <meta name="author" content="{tulis nama anda disimi}">
</head>
<body>
<h1>Gambar</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <p><label>Pilih gambar yang akan di upload: </label><br>
    <input type="file" name="gambar" id="gambar1"></p>
    <input type="submit" name="submit" value="Upload">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // direktori tujuan
    $target_dir = "C:/xampp/htdocs/php_lanjutan/gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if($check !== false) {
            echo "File berupa citra/gambar - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }
    }

    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    if ($_FILES["gambar"]["size"] > 500000) {
        echo "Maaf, ukuran file Anda terlalu besar.";
        $uploadOk = 0;
    }

    if($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg"
    && $tipeGambar != "gif" ) {
        echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Maaf, file Anda gagal diunggah.";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "File ". htmlspecialchars( basename( $_FILES["gambar"]["name"])). " berhasil diunggah.";
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
        }
    }
}
?>

</body>
</html>