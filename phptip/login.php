<!DOCTYPE html>
<?php
require_once("func.php");

if(isset($_POST['btn'])){
    $user=$_POST['user'];
    $pass=md5($_POST['pass']);
    $sql="SELECT * users WHERE username='$user' AND password='$password' ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_rows($result)==1){
        $_SESSION['user']=$user;
        //Do stuff if inloggad!
    }else{
        //Do stuff if felaktig inloggning
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="user" id="user" placeholder="Användarnamn" required>
        <input type="password" name="pass" id="pass" placeholder="Lösenord" required>
        <input type="submit" value="Logga in" name="btn">
</form>
</body>
</html>