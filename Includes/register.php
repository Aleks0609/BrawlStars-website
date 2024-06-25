<!-- Ricardo -->
<?php
    // Verbindungsaufbau
    $hostname = '89.58.47.144';
    $username = 'BrawlstarsUser';
    $password = 'BrawlstarsPW';
    $dbname = 'dbBrawlstars';

    // Verbindungsversuch zur MySQL-Datenbank
    $connection = mysqli_connect($hostname, $username, $password, $dbname);

    if (!$connection) {
        die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
    }

    // Vorbereitung des INSERT-Statements
    $name = "username";
    $pw = "password";
    $email = "email";
    $sql = "INSERT INTO tblUser (dtName, dtPassword, dtEmail) VALUES ('".$name.", ".$pw.", ".$email."')";

    // Ausführung des INSERT-Statements
    if (mysqli_query($connection, $sql)) {
        echo "Nachricht erfolgreich eingefügt";
    } else {
        echo "Fehler beim Einfügen der Nachricht: " . mysqli_error($connection);
    }

    // Schließen der Verbindung
    mysqli_close($connection);
?>