<?php
session_start();

if (isset($_SESSION['id']) ) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LogOut</title>
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
    </head>

    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Welcome</header>
                    <form action="/demo/src/scripts/logout.post.php" method="post">
                        <div class="field input-field">
                            <h2>Welcome dear
                                <?php
                                    echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];
                                ?>
                            </h2>
                        </div>
                        <div class="field button-field">
                            <button>Logout</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </body>

    </html>
<?php
} 
else {

    header("Location: /demo/src/pages/login.php");
    exit();
}

?>