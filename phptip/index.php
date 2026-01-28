<!DOCTYPE html>
<?php 
    require_once("func.php");



    if(isset($_POST['btn'])){
        $url=$_POST['url'];
        $desc=$_POST['desc'];
        $sql="INSERT INTO linx(url, description) VALUES ('$url', '$desc')";
        $result=mysqli_query($conn, $sql);
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="login.php">Login</a>
    <form action="index.php" method="post">
        <input type="text" name="url" id="url" placeholder="Skriv url inklusive https://">
        <input type="text" name="desc" id="desc" placeholder="Beskrivning">
        <input type="submit" value="Lägg till" name="btn">
    </form>
</body>
</html>