<?php

// Specifică informațiile de conectare la baza de date
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'databse_web';

// Crează conexiunea
$conn = mysqli_connect($host, $username, $password, $dbname);

// Verifică dacă conexiunea a eșuat
if (!$conn) {
    die("Conexiunea a eșuat: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperează datele din formular
    $usersusername = $_POST['username'];
    $usersemail = $_POST['email'];
    $userspassword = $_POST['password'];

    // Check if the username already exists in the database
    $check_username = "SELECT * FROM users WHERE usersusername = '$usersusername'";
    $result = mysqli_query($conn, $check_username);
    if (mysqli_num_rows($result) > 0) {
        echo "Numele de utilizator există deja.";
    } else {
        // Crează interogarea SQL pentru a insera datele în baza de date
        $sql = "INSERT INTO users (usersusername, usersemail, userspassword) VALUES ('$usersusername', '$usersemail', '$userspassword')";

        // Execută interogarea
        if (mysqli_query($conn, $sql)) {
            echo "Înregistrarea a reușit";
        } else {
            echo "Eroare: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

// Închide conexiunea
mysqli_close($conn);
?>