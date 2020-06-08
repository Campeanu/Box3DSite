<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merienda+One" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">

    <title>Box3D</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a class="active" href="index.php" style="text-decoration: none;">
                        <b>
                            <span class="span1">B</span><span class="span2">O</span><span class="span3">X</span><span class="span4">3</span><span class="span5">D</span>
                        </b>
                    </a>
                </li>
                <li class "h"><a href="download.php" style="text-decoration: none; color: black;"><b>Download </b></a></li>
                <li class "h"><a href="marketplace.php" style="text-decoration: none; color: black;"><b>Marketplace </b></a></li>
                <li class "h"><a href="contact.php" style="text-decoration: none; color: black;"><b>Contact </b></a></li>
                <li class "h"><a href="about.php" style="text-decoration: none; color: black;"><b>About </b></a></li>
            </ul>

            <div class="account">
                <?php
                if (isset($_SESSION['userId'])) {
                    echo
                        '<div class="logout-form">
                            <form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="logout-submit"><b>Logout</b></button>
                            </form>
                        </div>';
                } else {
                    echo
                        '<div class="login-form">
                            <form action="includes/login.inc.php" method="post">
                                <input  type="text"     name="mailuid" placeholder="E-mail/Username">
                                <input  type="password" name="pwd"     placeholder="Password">
                                <button type="submit"   name="login-submit"><b>Login</b></button>
                                <a href="signup.php"><b>Signup</b></a>
                            </form>
                        </div>';
                }
                ?>
            </div>

        </nav>
    </header>
