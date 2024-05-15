<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Gambar</title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }
        .gallery img {
            margin: 5px;
            width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Galeri Gambar</h1>
    <div class="gallery">
        <?php
        $images = ['img/1.jpg', 'img/2.jpg', 'img/3.jpg', 'img/4.jpg', 'img/5.jpg', 'img/6.jpg', 'img/7.jpg', 'img/8.jpg'];
        foreach ($images as $image) {
            if (is_file($image)) {
                echo '<img src="' . $image . '" alt="Gambar">';
            }
        }
        ?>
    </div>
</body>
</html>
