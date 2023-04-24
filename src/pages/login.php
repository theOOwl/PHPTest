<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <form action="/demo/src/scripts/login.post.php" method="post">
                        <header>LogIn</header>
                        <?php if(isset($_GET['error'])) {?>
                            <p class="error"> <?php echo $_GET['error'];?></p> 
                        <?php }?>
                        <div class="field input-field">
                            <input type="name" placeholder="User Name" class="input" name="username">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password" name="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                        <div class="field button-field">
                            <button>Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="./register.php" class="link signup-link">Signup</a></span>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>