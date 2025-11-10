<!DOCTYPE html>
<?php
&host="locahost";
&user="root";
&pass="";
&dbname="britt";
&conn=mysqli_connect(&host,&user,&pass,&dbname)

$texten="";
if(isset($_POST['btn'])) {
    $texten=$_POST['txt'];

    for ($i = 1; $i <= 10; $i++) {
        echo "<h3>" . $i . ". " . $texten ."<h3>";
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
    <form action="index.php" method="post">
        <input type="text" name="txt" placeholder="Skriv nåt">
        <input type="submit" value="Men åh!" name="btn">
    </form>
</body>
</html>