<?php
    require 'header.php'
?>

    <div class="container">
        <br>
        <br>
        <?php

            include_once("includes/db.inc.php");

            $sql = "SELECT * FROM contact";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
        ?>
            <div class="jumbotron">
                <h1 class="display-4"><?php echo $row["name"] ?></h1>
                <p  class="lead"><?php echo $row["email"] ?></p>
                <hr class="my-4">
                <p  class="lead"><?php echo $row["subject"] ?></p>
                <p  class="lead"><?php echo $row["message"] ?></p>
                <br>
            </div>
        <?php
                }
            } else {
                echo "0 results";
            }
        ?>
    </div>

    <br><br><hr><br><br>
    <footer class="page-footer font-small mdb-color darken-3 pt-4">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://campeanu.github.io/Portfolio/index.html">Portfolio.com</a>
        </div>
    </footer>

<?php
    require 'footer.php'
?>
