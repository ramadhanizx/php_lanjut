<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
</head>

<body>
<h1>komentar</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table>
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>E-mail : </td>
                <td><input type="text" name="email"></td>
            </tr>

            <tr>
                <td>Komentar : </td>
                <td><textarea name="komentar" id="" rows="5" cols="40"></textarea></td>
            </tr>

            <tr>
                <td><input type="submit" value="Simpan"></td>
                <td><input type="reset" value="Bersihkan"></td>
            </tr>
        </table>
    </form>

    <?php
    $name = $email = $comment = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["nama"];
        $email = $_POST["email"];
        $comment = $_POST["komentar"];
        echo ("Nama : " . $name . "<br>");
        echo ("E-mail : " . $email . "<br>");
        echo ("Komentar : " . $comment . "<br>");
        echo ("<hr>");
    }

    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
</body>

</html>