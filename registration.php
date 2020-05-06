<?php
session_start();
// header('location:login.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$email = $_POST['email'];
$pass = $_POST['password'];
$name = $_POST['name'];
$s = "select * from table2 where email='$email'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1){
    echo "<h3 style='font-family:Segoe UI;'>Email already exists</h3>";
    echo "<script>setTimeout(\"location.href = 'login.php';\",1500);</script>";
}
else{
    $reg = "insert into table2(name,password,age,post,salary,email) values ('$name','$pass',20,'unassigned',20000,'$email')";
    mysqli_query($con,$reg);
    echo "<h3 style='font-family:Segoe UI;'>Registration successful</h3><h4 style='font-family:Segoe UI;'>Login again!</h4>";
    echo "<script>setTimeout(\"location.href = 'login.php';\",1500);</script>";
}

?>