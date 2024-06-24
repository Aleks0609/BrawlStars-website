<?php
// Verbindung zur Datenbank herstellen
$conn = new mysqli('localhost', 'root', '', 'mywebsite');

// Überprüfen, ob die Verbindung erfolgreich ist
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Benutzereingaben aus dem Formular holen
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Passwort hashen

// Überprüfen, ob der Benutzername oder die E-Mail bereits existieren
$sql = "SELECT * FROM users WHERE username='$username';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Benutzername oder Email ist bereits vergeben.";
} else {
    // Benutzer in der Datenbank speichern
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Registrierung erfolgreich!";
    } else {
        echo "Fehler: " . $sql . "<br>" . $conn->error;
    }
}

// Verbindung schließen
$conn->close();
?>