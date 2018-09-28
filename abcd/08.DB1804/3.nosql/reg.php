<?php
$servername = "localhost";
$username = "root";
$password = "123qqq...A";
$dbname = "bbsdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("link fail: " . $conn->connect_error);
}else{echo "link mysql Ok"; echo "       ";} 

$username=$_POST['name'];
$userpassword=$_POST['password'];

$sql="insert into userinfo (name,password) values ('$username','$userpassword')";
if($conn->query($sql)){echo "insert data ok"; }
$conn->close();

?>
