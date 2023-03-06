<?php
include "./models/login_user.php";
include "./db.operation.php";

session_start();

$login_page = "/demo/src/pages/login.php";
$welcome_page = "/demo/src/pages/welcome.php";


if(!isset($_POST['username']) || !isset($_POST['password'])) {
    header ("Location: $login_page?error=Username and Password are required");
    exit();
}

$user = new LoginUser ($_POST['username'], $_POST['password']);

if (!$user-> is_user_valid()) {
    header ("Location: $login_page?error=Password is required");
    exit();
}

$db_user = db_login($user);

if ($db_user == null) {
    header("Location: $login_page?error=Incorrect User Name or Password");
    exit();
}

$_SESSION['id'] = $db_user->Id;
$_SESSION['username'] = $db_user->Username;
$_SESSION['first_name'] = $db_user->FirstName;
$_SESSION['last_name'] = $db_user->LastName;

header("Location: $welcome_page");
exit();

?>