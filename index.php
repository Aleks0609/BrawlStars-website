<!-- Ricardo -->
<!DOCTYPE html>
<html>
<head>
    <!-- Der Titel der Webseite -->
    <title>Brawl Stars</title>

<<<<<<< HEAD
        body{
            background: -webkit-gradient(linear, left top, right bottom, color-stop(50%, #1a8cff), color-stop(50%, #ff3333));
            background: -webkit-linear-gradient(top left, #1a8cff 50%, #ff3333 50%);
            background: -o-linear-gradient(top left,#1a8cff 50%, #ff3333 50%);
            background: linear-gradient(to bottom right, #1a8cff 50%, #ff3333 50%); 
=======
    <!-- Zeichensatzdefinition -->
    <meta charset="UTF-8">

    <!-- Eingebettetes CSS für die Gestaltung der Seite -->
    <style>   
        /* Entfernt den Standard-Margin des Body-Tags */
        body { margin: 0; }

        /* Definiert den Hintergrund des Body-Tags mit einem Farbverlauf */
        body {
            background: -webkit-gradient(linear, left top, right bottom, color-stop(50%, #1a8cff), color-stop(50%, #ff3333)); /* Für alte Webkit-Browser */
            background: -webkit-linear-gradient(top left, #1a8cff 50%, #ff3333 50%); /* Für Webkit-Browser */
            background: -o-linear-gradient(top left, #1a8cff 50%, #ff3333 50%); /* Für Opera */
            background: linear-gradient(to bottom right, #1a8cff 50%, #ff3333 50%); /* Standard-Syntax */
>>>>>>> 518f14632b62b562cf9552ad7d8a7c5a51468332
        }
        
        /* Gestaltung des Navigationsmenüs */
        ul {
            list-style-type: none; /* Entfernt die Standard-Aufzählungszeichen */
            margin: 0; /* Entfernt den Standard-Margin */
            padding: 0; /* Entfernt das Standard-Padding */
            overflow: hidden; /* Verhindert, dass das Menü überläuft */
            background-color: #333; /* Hintergrundfarbe des Menüs */
            position: fixed; /* Fixiert das Menü am oberen Rand */
            top: 0; /* Setzt das Menü an den oberen Rand */
            width: 100%; /* Macht das Menü 100% breit */
        }

        /* Gestaltung der Listenelemente im Menü */
        li {
            float: left; /* Positioniert die Listenelemente nebeneinander */
        }

        /* Gestaltung der Links im Menü */
        li a {
            display: block; /* Macht den Link zu einem Blockelement */
            color: white; /* Textfarbe weiß */
            text-align: center; /* Zentriert den Text */
            padding: 14px 16px; /* Innenabstand des Links */
            text-decoration: none; /* Entfernt die Standard-Unterstreichung */
        }

        /* Hover-Effekt für die Links, außer für den aktiven Link */
        li a:hover:not(.active) {
            background-color: #111; /* Hintergrundfarbe beim Hover */
        }

        /* Gestaltung des aktiven Links */
        .active {
            background-color: #fe9502; /* Hintergrundfarbe des aktiven Links */
        }
<<<<<<< HEAD
        </style>
    </head>
    <body>
        <ul>
            <li><a class= "active" href="#home">Home</a></li>
            <li><a href="#stats">Stats</a></li>
            <li><a href="#brawlers">Brawlers</a></li>
            <li><a href="#allMaps">All Maps</a></li>
            <li><a href="#rankings">Rankings</a></li>
        </ul>
        
        <div style="padding: 20px; margin-top: 30px;height: 3000px;">
            <h1 style="color: white;">Brawl Stars</h1>
            <?php
            include_once("CSS\backgroundStyle.html")
            ?>
            <img src="https://th.bing.com/th/id/R.01b9697f94623e46b68ae7c075376f42?rik=axHASJq4bWmWHQ&pid=ImgRaw&r=0"
            width="100" height="100">
            <img src="https://i.redd.it/7ep35xzoin421.png" width="100" height="100">
            <img src="https://clipart.info/images/ccovers/1623765444crow-legendary-assassin-type-brawler-stars-png.png"
            width="100" height="100">
        </div> 
    </body>
=======
    </style>
</head>
<body>
    <!-- Navigationsmenü -->
    <ul>
        <li><a class="active" href="#home">Home</a></li> <!-- Aktiver Link -->
        <li><a href="#stats">Stats</a></li>
        <li><a href="#brawlers">Brawlers</a></li>
        <li><a href="#allMaps">All Maps</a></li>
        <li><a href="#rankings">Rankings</a></li>
    </ul>
    
    <!-- Hauptinhalt der Seite -->
    <div style="padding: 20px; margin-top: 30px; height: 3000px;">
        <h1 style="color: white;">Brawl Stars</h1> <!-- Überschrift -->
        
        <!-- PHP-Include für eine externe HTML-Datei -->
        <?php
        include_once("CSS/backgroundStyle.html")
        ?>

        <!-- Bilder mit festen Größen -->
        <img src="https://th.bing.com/th/id/R.01b9697f94623e46b68ae7c075376f42?rik=axHASJq4bWmWHQ&pid=ImgRaw&r=0" width="100" height="100">
        <img src="https://i.redd.it/7ep35xzoin421.png" width="100" height="100">
        <img src="https://clipart.info/images/ccovers/1623765444crow-legendary-assassin-type-brawler-stars-png.png" width="100" height="100">
    </div> 
</body>
>>>>>>> 518f14632b62b562cf9552ad7d8a7c5a51468332
</html>
