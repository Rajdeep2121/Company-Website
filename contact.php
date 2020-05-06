<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$sender = $_POST['sender'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$s = "insert into feed(sender,email,feedback) values ('$sender','$email','$feedback')";
mysqli_query($con,$s);

echo "Stored successfully";
echo "<script>setTimeout(\"location.href = 'home.php';\",1500);</script>";

?>