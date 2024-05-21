<?php
// Verbindung zur Datenbank herstellen
$servername = "localhost"; // Datenbank-Servername
$username = "root"; // Datenbank-Benutzername
$password = ""; // Datenbank-Passwort
$dbname = "brawl_stars"; // Name der Datenbank

// Spieler-Tag von der AJAX-Anfrage erhalten
$playerTag = $_POST['playerTag'];

// Datenbankverbindung herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindungsprüfung
if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}

// API-Aufruf an Brawl Stars API vorbereiten
$apiKey = "Aleksandar"; // Dein Brawl Stars API-Schlüssel
$url = "https://api.brawlstars.com/v1/players/" . $playerTag;

// cURL-Anfrage vorbereiten
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer $apiKey"
));

// API-Anfrage ausführen und Antwort erhalten
$response = curl_exec($ch);
curl_close($ch);

// JSON-Antwort in ein Array dekodieren
$data = json_decode($response, true);

// Spielerinformationen aus der Antwort extrahieren
$name = $data['name'];
$tag = $data['tag'];
$trophies = $data['trophies'];
$expLevel = $data['expLevel'];

// SQL-Abfrage zum Einfügen oder Aktualisieren der Spielerinformationen
$sql = "INSERT INTO players (tag, name, trophies, expLevel)
        VALUES ('$tag', '$name', $trophies, $expLevel)
        ON DUPLICATE KEY UPDATE
        name = VALUES(name), trophies = VALUES(trophies), expLevel = VALUES(expLevel)";

// Abfrage ausführen
if ($conn->query($sql) === TRUE) {
    // Erfolgreiche Antwort zurücksenden
    echo json_encode($data);
} else {
    // Fehlermeldung bei einer fehlgeschlagenen Abfrage
    echo json_encode(array('error' => 'Fehler beim Speichern der Daten: ' . $conn->error));
}

// Verbindung schließen
$conn->close();
?>