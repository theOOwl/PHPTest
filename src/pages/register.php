

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>
    <section class="container forms">
    <div class="form signup">
        <div class="form-content">
            <header>Signup</header>
            <form action="/demo/src/scripts/register.post.php" method="post">
                        <?php if(isset($_GET['error'])) {?>
                            <p class="error"> <?php echo $_GET['error'];?></p> 
                        <?php }?>
                        <?php if(isset($_GET['info'])) {?>
                            <p class="info"> <?php echo $_GET['info'];?></p> 
                        <?php }?>
                <div class="field input-field">
                    <input type="name" placeholder="First Name" class="input" name="first_name">
                </div>

                <div class="field input-field">
                    <input type="name" placeholder="Last Name" class="input" name="last_name">
                </div>

                <div class="field input-field">
                    <input type="name" placeholder="User Name" class="input" name="username">
                </div>

                <div class="field input-field">
                    <input type="password" placeholder="Create password" class="password" name="password">
                </div>

                <div class="field input-field">
                    <input type="password" placeholder="Confirm password" class="password" name="confirm_password">
                    <i class='bx bx-hide eye-icon'></i>
                </div>

                <div class="field button-field">
                    <button>Signup</button>
                </div>
            </form>

            <div class="form-link">
                <span>Already have an account? <a href="./login.php" class="link login-link">Login</a></span>
            </div>
        </div>

    </section>
</body>
</html>