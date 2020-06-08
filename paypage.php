<?php
    require 'header.php';

    if(isset($_SESSION['userId'])) {
?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <div class="container">
            <h2 class="my-4 text-center">Buy Professional Licence for Box3D 45$ per month.</h2>
            <form action="./charge.php" method="post" id="payment-form">
                <div class="form-row">
                <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
                <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
                <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
                    <div id="card-element" class="form-control">
                    </div>
                    <div id="card-errors" role="alert"></div>
                </div>

                <button>Submit Payment</button>
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="./js/charge.js"></script>
    </body>
    </html>

<?php
    } else {
?>
    <link rel="stylesheet" href="style/style.css">
    <div class="log">
        <a href="index.php"><h2 class="paypageh1">You need to be logged in !!!</h2></a>
    </div>

<?php
    }
?>
