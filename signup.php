
<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="Stylesign.css">
        <link rel="stylesheet" href="connection.php">
        <link rel="stylesheet" href="functii.php">
    </head>
    <body>
        <div class="signup">
            <h1>SignUp</h1>
            <form>
                <p>Nume utilizator</p>
                <input type="text" placeholder="Introduceti numele de utilizator">
                <p>Parola</p>
                <input type="password" placeholder="Introduceti parola"> 
                <p>Email</p>
                <input type="text" placeholder="Introduceti email-ul dumneavoastra">
                
                <input type="submit" value="SignUp">
                
            </form>
            
        </div>
    </body>
</html>
<?php
session_start();
   include("connection.php");
   include("functii.php");

   $user_data = check_login($con);

   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
     $user_name = $_POST['user_name'];
     $password = $_POST['password'];

     if(!empty($user_name ) && !empty($password) && !is_numeric($user_name))
     {
         $user_id = random_num(20);
         $query = "insert into users (user_id,user_name,password) values('$user_id','$user_name','$password')";
         mysqli_query($con, $query);
         header("Location: login.php");
         die;
     }
     else
     {
        echo "Ati introdus informatii invalide!";
     }

   }
   
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="Stylesign.css">
        <link rel="stylesheet" href="connection.php">
        <link rel="stylesheet" href="functii.php">
    </head>
    <body>
        <div class="signup">
            <h1>SignUp</h1>
            <form>
                <p>Nume utilizator</p>
                <input type="text" placeholder="Introduceti numele de utilizator">
                <p>Parola</p>
                <input type="password" placeholder="Introduceti parola"> 
                <p>Email</p>
                <input type="text" placeholder="Introduceti email-ul dumneavoastra">
                
                <input type="submit" value="SignUp">
                
            </form>
            
        </div>
    </body>
</html>