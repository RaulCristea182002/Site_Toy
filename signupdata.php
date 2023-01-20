<?php


$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'databse_web';


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Conexiunea a eșuat: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $usersusername = $_POST['username'];
    $usersemail = $_POST['email'];
    $userspassword = $_POST['password'];

    $check_username = "SELECT * FROM users WHERE usersusername = '$usersusername'";
    $result = mysqli_query($conn, $check_username);
    if (mysqli_num_rows($result) > 0) {
        echo "Numele de utilizator există deja.";
    } else {
        
        $sql = "INSERT INTO users (usersusername, usersemail, userspassword) VALUES ('$usersusername', '$usersemail', '$userspassword')";

        
        if (mysqli_query($conn, $sql)) {
            echo "Înregistrarea a reușit";
        } else {
            echo "Eroare: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}


mysqli_close($conn);
?>