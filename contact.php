<?php
$p1 = $_POST['Name'];
$p2 = $_POST['Email'];
$p3 = $_POST['Number'];
$p4 = $_POST['Subject'];
$p5 = $_POST['Message'];

$servername = "localhost";
$username = "root";
$password = "Kunal@2002";
$dbname = "form";

// I am Creating a connection here with MySQL.
$conn = mysqli_connect($servername, $username, $password, $dbname);

// I am Checking connection here. 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

$sql = "INSERT INTO `contact`(`Name`, `Email`, `Number`,`Subject`,`Message`) VALUES ('$p1','$p2','$p3','$p4','$p5')";

if (mysqli_query($conn, $sql)) {
  echo "Table php created successfully";
} else {
  echo "Error! creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>