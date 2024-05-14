<?php
// API-Endpunkt und Header für die Brawl Stars API
$api_url = "https://developer.brawlstars.com/";
$api_key = "Aleksandar";  // Ersetzen Sie dies durch Ihren tatsächlichen API-Schlüssel

if (isset($_POST['playerTag'])) {
    $playerTag = $_POST['playerTag'];

    // cURL Initialisierung
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url . $playerTag);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: Bearer $api_key"
    ));

    // Ausführung und Speicherung des Ergebnisses
    $response = curl_exec($ch);
    curl_close($ch);

    // Ausgabe der JSON-Daten
    echo $response;
}
?>