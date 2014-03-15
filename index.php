<?php
if(!is_file('api.keys')) {
    header('location: settings.php');
    exit();
}
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Citoyens Capteurs - Pollution</title>
        <link rel="stylesheet" href="leaflet.css">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header id="title"><h1>Citoyens Capteurs - Mesure de pollution</h1></header>
        <div id="map"></div>
        <script type="text/javascript" src="leaflet.js"></script>
        <script type="text/javascript" src="js.js"></script>
    </body>
</html>