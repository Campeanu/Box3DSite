<?php
    require "header.php"
?>

    <main>

        <?php
            if(isset($_GET['error'])) {
              
                if($_GET['error'] == "emptyfields") { 
                  
                    echo '<div class="signupError">Empty fields!</div>';
                
                } else if($_GET['error'] == "invalidemailuid") {
                
                    echo '<div class="signupError">Invaild username and e-mail!</div>';
                
                } else if($_GET['error'] == "invalidemail") {
                
                    echo '<div class="signupError">Invaild e-mail!</div>';
                
                } else if($_GET['error'] == "invalideusername") {
                
                    echo '<div class="signupError">Invailde username!</div>';
                
                } else if($_GET['error'] == "passwordcheck") {
                
                    echo '<div class="signupError">Your passwords do not match!</div>';
                
                } else if($_GET['error'] == "usertaken") {
                
                    echo '<div class="signupError">Username is already taken!</div>';
                
                }
            
            }
        ?>

        <div class="wrapper-main">
            <section class="section-default">
                <h1><b>Signup</b></h1>
                <form action="includes/signup.inc.php" method="post">
                    <input  type="text"     name="uid"        placeholder="Username">
                    <input  type="text"     name="mail"       placeholder="E-mail">
                    <input  type="password" name="pwd"        placeholder="Password">
                    <input  type="password" name="pwd-repeat" placeholder="Confirm password">
                    <button type="submit"   name="signup-submit"><b>Signup</b></button>
                </form>
            </section>
        </div>
    </main>

<?php
    require "footer.php"
?>
