<?php
// Récupérer l'adresse IP du visiteur
$ip = $_SERVER['REMOTE_ADDR'];

// API pour obtenir une image aléatoire
$image_url = "https://www.aleou.fr/xusers/ximg/wsuppliers/14123/max/theatre-la-cigale-paris.webp";

// Page HTML
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        img {
            width: 100%;
            max-width: 800px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Bienvenue sur mon site !</h1>
        <p>Ton adresse IP est : <strong><?php echo $ip; ?></strong></p>
        <h2>Voici une belle image aléatoire :</h2>
        <img src="<?php echo $image_url; ?>" alt="Image aléatoire">
    </div>

</body>
</html>
