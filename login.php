<?php
session_start();
include "db_con.php";

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(!isset($_POST['u_user_name']) || !isset($_POST['u_password'])) {
    header ("Location: index.php?error=User Name and Password are required");
    exit();
}

$username = validate($_POST['u_user_name']);
$password = validate($_POST['u_password']);

if(empty($username)) {
    header ("Location: index.php?error=User Name is required");
    exit();
}

else if(empty($password)) {
    header ("Location: index.php?error=Password is required");
    exit();
}

$sql="SELECT * FROM users WHERE u_user_name='$username' AND u_password='$password'";
$result = mysqli_query($con , $sql);

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    echo "Logged In";
    $_SESSION['u_user_name'] = $row['u_user_name'];
    $_SESSION['u_first_name'] = $row['u_first_name'];
    $_SESSION['u_last_name'] = $row['u_last_name'];
    $_SESSION['id'] = $row['id'];
    header("Location: home.php");
    error_log(print_r("Logged in" , TRUE)); 
    exit();
}
else {
    header("Location: index.php?error=Incorrect User Name or Password");
    exit();
}  
?>