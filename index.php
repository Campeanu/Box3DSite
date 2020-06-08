<?php
    require 'header.php'
?>

    <main>
        <section class="section-default">
            <?php
            if (isset($_SESSION['userId'])) {
            ?>
                <!--<div id="helpdiv" class="logged-in"><b><p>You are logged in!</p></b></div> -->
                <div class="container mt-4">
                    <div class="btn-group" role="group">
                        <a href="customers.php" class="btn btn-secondary">Customers</a>
                        <a href="transactions.php" class="btn btn-primary">Transactions</a>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div id="helpdiv" class="logged-out"><b><p>You are logged out!</p></b></div>
                <br>
                <div class="container">
                    <img src="res/box3dlauncher.png" alt="box3d" width = "100%">
                    <br>
                    <br>
                    <img src="res/box3d.png" alt="box3d" width = "100%">
                    <br>
                    <br>
                    <img src="res/portfolio.png" alt="box3d" width = "100%">
                </div>
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="https://campeanu.github.io/Portfolio/index.html">Portfolio.com</a>
                </div>
            <?php
            }
            ?>
        </section>
    </main>

    <script type="text/javascript">

        $(document).ready(function() {
            setTimeout(function() {
                $(".logged-in").fadeOut(1100);
            }, 2000);
        });
        $(document).ready(function() {
            setTimeout(function() {
                $(".logged-out").fadeOut(1100);
            }, 2000);
        });

    </script>
<?php
    require 'footer.php'
?>
