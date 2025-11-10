<!DOCTYPE html>
<?php
$host="localhost";
$user="root";
$pass="";
$dbname="britt";
$conn=mysqli_connect($host,$user,$pass,$dbname);

if(isset($_POST['btn'])){
    $texten=$_POST['txt'];
    $sql="INSERT INTO link(url) VALUES ('$texten')";
    $result=mysqli_query($conn,$sql);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="txt" placeholder="Skriv nåt">
        <input type="submit" value="Men åh!" name="btn">
    </form>
    <?php
    $sql="SELECT * FROM link";
    $result=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($result)){ ?>
        <a href="<?=$row['url']; ?>"><?=$row['url']; ?></a><br>
<?php   }
    ?>
</body>
</html>
