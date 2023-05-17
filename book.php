<?php
$p1 = $_POST['Place'];
$p2 = $_POST['Guests'];
$p3 = $_POST['Arrivals'];
$p4 = $_POST['Leaving'];

$servername = "localhost";
$username = "root";
$password = "Kunal@2002";
$dbname = "form";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die("Connection faild: " . mysqli_connect_error());
}

$sql = "INSERT INTO `book`(`Place`, `Guests`, `Arrivals`, `Leaving`) VALUES ('$p1', '$p2', '$p3', '$p4')";

if (mysqli_query($conn, $sql)){
    echo "From submit successfully";
}else{
    echo "Error! creating Form: " . mysqli_error($conn);
}

mysqli_close($conn);
?>