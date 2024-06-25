<!-- Ricardo -->
<?php
//
    // Verbindungsaufbau
    $username = 'BrawlstarsUser';
    $password = 'BrawlstarsPW';
    $dbname = 'dbBrawlstars';

    // Verbindungsversuch zur MySQL-Datenbank
    $connection = mysqli_connect($hostname, $username, $password, $dbname);

    if (!$connection) {
        die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
    }

    // Vorbereitung des INSERT-Statements
    // Nimm an, dass $text die Nachricht ist, die du einfügen möchtest.
    // In einem realen Szenario solltest du $text zuerst validieren und bereinigen.
    $text = "Deine Nachricht hier einfügen";
    $sql = "INSERT INTO deineTabelle (nachrichtSpalte) VALUES ('".$text."')";

    // Ausführung des INSERT-Statements
    if (mysqli_query($connection, $sql)) {
        echo "Nachricht erfolgreich eingefügt";
    } else {
        echo "Fehler beim Einfügen der Nachricht: " . mysqli_error($connection);
    }

    // Schließen der Verbindung
    mysqli_close($connection);
?>