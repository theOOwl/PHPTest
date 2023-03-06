<?php
include "./db_connection.php";
include "./models/db_user.php";

function db_login($user)
{
  $con = make_connection();
  $sql = "SELECT * FROM users WHERE u_user_name='$user->Username'";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) === 0) {
    return false;
  }
  $row = mysqli_fetch_assoc($result);
  $hashed_password = $row['u_password'];
  if (!password_verify($user->Password, $hashed_password)) {
    return false;
  }
  $db_user = new DbUser($row['id'], $row['u_user_name'], $row['u_first_name'], $row['u_last_name']);
  $con->close();
  return $db_user;

  $con->close();
}
function db_register($user)
{

  $con = make_connection();
  $sql = "SELECT * FROM users WHERE u_user_name='$user->Username'";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    return false;
  }

  $hashed_password = password_hash($user->Password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (u_user_name, u_first_name, u_last_name, u_password)
    VALUES ('$user->Username', '$user->FirstName', '$user->LastName', '$hashed_password')";

  if ($con->query($sql) === TRUE) {
    echo "New user created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }

  $con->close();
  return true;
}
