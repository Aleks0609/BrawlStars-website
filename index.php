<!-- Ricardo -->
<!DOCTYPE html>
<html>
    <head>
        <title>Brawl Stars</title>
        <meta charset="UTF-8">
        <style>   
        
        body {margin: 0;}

        body{
            background: -webkit-gradient(linear, left top, right bottom, color-stop(50%, #1a8cff), color-stop(50%, #ff3333));
            background: -webkit-linear-gradient(top left, #1a8cff 50%, #ff3333 50%);
            background: -o-linear-gradient(top left,#1a8cff 50%, #ff3333 50%);
            background: linear-gradient(to bottom right, #1a8cff 50%, #ff3333 50%); 
        }
        
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }

        li{
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #fe9502;
        }
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
</html>
