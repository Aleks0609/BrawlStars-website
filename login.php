<?php
// Verbindung zur Datenbank herstellen
$conn = new mysqli('localhost', 'root', '', 'mywebsite');

// Überprüfen, ob die Verbindung erfolgreich ist
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Benutzereingaben aus dem Formular holen
$username = $_POST['username'];
$password = $_POST['password'];

// Benutzer in der Datenbank suchen
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Benutzerdaten abrufen
    $user = $result->fetch_assoc();
    
    // Passwort überprüfen
    if (password_verify($password, $user['password'])) {
        echo "Login erfolgreich!";
        // Hier könnten Sie eine Session starten und den Benutzer weiterleiten
        // session_start();
        // $_SESSION['username'] = $username;
        // header("Location: dashboard.php");
    } else {
        echo "Falsches Passwort.";
    }
} else {
    echo "Benutzer nicht gefunden.";
}

// Verbindung schließen
$conn->close();
?>