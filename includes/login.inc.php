<?php
if(isset($_POST["lsubmit"])){
    require "connect.php";
    $email = $_POST["userid"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn,$sql);
       
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "name".$row['name'];
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
}
else{
    header("Location:../index.php?");
}