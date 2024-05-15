<?php
// Set cookie
setcookie("user", "NamaPengguna", time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari

// Akses cookie
if(isset($_COOKIE["user"])) {
    echo "Selamat datang, " . $_COOKIE["user"];
} else {
    echo "Selamat datang, tamu!";
}
?>
