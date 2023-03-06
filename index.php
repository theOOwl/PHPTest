<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])) {?>
            <p class="error"> <?php echo $_GET['error'];?></p> 
       <?php }?>
       <label>User Name</label>
       <input type="text" name="u_user_name" placeholder="User Name"><br>
       <label>Password</label>
       <input type="password" name="u_password" placeholder="password"><br>
       <button type="submit">Enter</button>
    </form>
</body>
</html>