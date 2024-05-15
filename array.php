<?php
// Array dengan nama dan umur
$data = array(

    array("nama" => "Mikasa Ackerman", "umur" => 21),
    array("nama" => "Nobara Kugisaki","umur" => 22),
    array("nama" => "Asuna","umur" => 23),
    array("nama" => "Erza Scarlet","umur" => 26),
    array("nama" => "Nezuko Kamado","umur" => 27),
    array("nama" => "Yumeko Jabami","umur" => 25),
    array("nama" => "Cardcaptor Sakura","umur" => 29),
    array("nama" => "Lucy Heartfilia","umur" => 24),
    array("nama" => "Esdeath","umur" => 24),
    array("nama" => "Kana Arima","umur" => 22),
    array("nama" => "Mitsuri Kanroji",
    array("nama" =>  "Nami","umur" => 24),
    array("nama" => "Puella Magi Madoka Magica","umur" => 28),
    array("nama" => "Sailor Moon","umur" => 25),
    array("nama" => "Violet Evergarden","umur" => 29),
    array("nama" => "Chihayafuru","umur" => 22),

);

// Konversi array menjadi JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Tampilkan JSON
echo $json_data;
?>
