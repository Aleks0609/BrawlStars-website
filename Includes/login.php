<?php
    // Aleksandar
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

    // Vorbereitung des SELECT-Statements
    $sql = "SELECT dtName, dtEmail, dtPassword FROM tblUser WHERE dtName LIKE 'username' AND dtEmail LIKE 'email' AND dtPassword LIKE 'password'";

    // Ausführung des SELECT-Statements
    $result = mysqli_query($connection, $sql);

    // Überprüfen ob der Query richtig ist.
    if ($result) {
        echo "Dein Query wurde erfolgreich gesendet und verarbeitet.";
    } else {
        echo "Fehler beim ausführen deines Queries: " . mysqli_error($connection);
    }

    // Datenverarbeitung
    if (mysqli_num_rows($result) > 0) {
        // Anzahl der erhaltenen Datensetze.
        $numRows = mysqli_num_rows($result);
        // Daten aus jeder Reihe ausgeben (Pfankuchen vom Stapel nehmen)
        for ($i=0; $i < $numRows; $i++) { 
            $row = mysqli_fetch_assoc($result);
            echo "name: " . $row["dtUser"]. " - Text: " . $row["dtName"]. "";
        }
    } else {
        echo "0 Ergebnisse gefunden";
    }

    // Resultat freisetzen (Den Teller wegräumen)
    mysqli_free_result($result);

    // Schließen der Verbindung
    mysqli_close($connection);
?>