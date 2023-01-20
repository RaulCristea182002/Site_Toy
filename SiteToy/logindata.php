<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databse_web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $stmt = $conn->prepare("SELECT * FROM users WHERE usersusername = ? AND userspassword = ?");
    $stmt->bind_param("ss", $username, $password);

    
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        
        $_SESSION["username"] = $username;
       
        echo 'da, exista: ';
        sleep(3);
        header("Location: index.php");
    } else {
        
        echo 'utilizatorul nu este gasit, va rugam sa va inregistrati';
        sleep(3);

        header("Location: signup.php");
    }
    $stmt->close();
    $conn->close();
}
?>