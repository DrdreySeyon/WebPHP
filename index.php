<?php
$ip = $_SERVER['REMOTE_ADDR']; // Récupère l'adresse IP du visiteur
$image_url = "https://source.unsplash.com/random/800x600"; // Image aléatoire
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Site PHP</title>
</head>
<body style="text-align: center; font-family: Arial, sans-serif;">
    <h1>Ton adresse IP est : <?php echo $ip; ?></h1>
    <h2>Voici une belle image :</h2>
    <img src="<?php echo $image_url; ?>" alt="Image aléatoire" style="width: 80%; max-width: 800px;">
</body>
</html>
