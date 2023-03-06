<?php
include "./models/register_user.php";
include "./db.operation.php";

$register_page = "/demo/src/pages/register.php";
$welcome_page = "/demo/src/pages/welcome.php";


$user = new RegisterUser ($_POST['username'], $_POST['password'],$_POST['confirm_password'], $_POST['first_name'], $_POST['last_name']);


if (!$user-> valid_name()) {
    header ("Location: $register_page?error=First Name and Last Name are required");
    exit();
}
if (!$user-> required_username()) {
    header ("Location: $register_page?error=User Name is required");
    exit();
}
if (!$user-> valid_password()) {
    header ("Location: $register_page?error=Password is required");
    exit();
}
if (!$user-> confirm_password()) {
    header ("Location: $register_page?error=Passwords are not the same");
    exit();
}
if (!$user-> valid_username()) {
    header ("Location: $register_page?error=User Name must be in English Letter");
    exit();
}

if (!db_register($user)) {
    header ("Location: $register_page?error=This Username is already exist");
    exit();
}

header ("Location: $register_page?info=Dear $user->FirstName $user->LastName, your registration was successfully completed by '$user->Username' username.");
exit();
 ?>