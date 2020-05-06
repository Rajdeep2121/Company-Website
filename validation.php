<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$email = $_POST['email'];
$pass = $_POST['password'];
$s = "select * from table2 where email='$email' && password='$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1){
    $row = mysqli_fetch_array($result);
    $_SESSION['age']=$row['age']; 
    $_SESSION['posting']=$row['post']; 
    $_SESSION['salary']=$row['salary']; 
    $_SESSION['name']=$row['name'];
    $_SESSION['logged_in']=true;
    header('location:profile.php');
}
else{
    echo "Some error";
    echo "<script>setTimeout(\"location.href = 'login.php';\",1500);</script>";
    // header('location:login.php');
}
?>