<?php
$con = mysqli_connect("localhost", "root", "akku", "madinterns") or die(mysqli_error($con));

$user = mysqli_real_escape_string($con,$_POST['User']);
$usermobile = mysqli_real_escape_string($con,$_POST['Usermobile']);
$name = mysqli_real_escape_string($con,$_POST['Name']);
$department = mysqli_real_escape_string($con,$_POST['Department']);
$duration = mysqli_real_escape_string($con,$_POST['Duration']);
$district = mysqli_real_escape_string($con,$_POST['District']);
$price = mysqli_real_escape_string($con,$_POST['Price']);
$mobile = mysqli_real_escape_string($con,$_POST['Mobile']);
$web = mysqli_real_escape_string($con,$_POST['Web']);
$address = mysqli_real_escape_string($con,$_POST['Address']);
$about = mysqli_real_escape_string($con,$_POST['About']);

$user_registration_query = "insert into main(User,Usermobile,Name,Department,Duration,District,Price,Mobile,Web,Address,About) ". "values "
        . "('$user','$usermobile','$name','$department','$duration','$district','$price','$mobile','$web','$address','$about')";

$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
header('Location: index.php')
?>


