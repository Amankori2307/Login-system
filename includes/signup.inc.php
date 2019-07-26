<?php
if(isset($_POST["ssubmit"])){
require "connect.php";

$name = $_POST["name"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$password = $_POST["password"];
$password_r = $_POST["password_r"];

//Printing retrived data
echo "Name : ".$name."<br>";
echo "E-mail : ".$email."<br>";
echo "DOB : ".$dob."<br>";
echo "Password : ".$password."<br>";
echo "Password : ".$password_r."<br>";

//Inserting data into database
$sql ="INSERT INTO users (id, name, email, password, dob) VALUES (NULL, '$name', '$email' , '$password', '$dob')";
if(mysqli_query($conn,$sql)){
    echo "inserted";
}else{
    echo mysqli_error($conn);
}


mysqli_close($conn);
}
else{
    header("Location:../index.php?");
    exit();
}