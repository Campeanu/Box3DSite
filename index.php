<?php
    require 'header.php'
?>

    <main>
        <section class="section-default">
            <?php
                if(isset($_SESSION['userId'])) {
                    echo '<div id="helpdiv" class="logged-in"><b><p>You are logged in!</p></b></div>';
                } else {
                    echo '<div id="helpdiv" class="logged-out"><b><p>You are logged out!</p></b></div>';
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
