<?php
$p1 = $_POST['Email'];
$p2 = $_POST['Password'];

$servername = "localhost";
$username = "root";
$password = "Kunal@2002";
$dbname = "form";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die("Connection faild: " . mysqli_connect_error());
}

$sql = "INSERT INTO `register`(`Email`, `Password`) VALUES ('$p1', '$p2')";

if (mysqli_query($conn, $sql)){
    echo "From submit successfully";
}else{
    echo "Error! creating Form: " . mysqli_error($conn);
}

mysqli_close($conn);
?>