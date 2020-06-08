<?php
    require 'header.php'
?>

    <br>

    <div class="container">
        <form action="includes/contact_system.php" method="POST">
            <h3>Contact: </h3>
            <br>
            <div class="form-group">
                <!-- <label for="exampleInputEmail1">Introdu un nume</label> -->
                <input type="text" class="form-control" name = "input_1" id="input_1" aria-describedby="nameHelp" placeholder="Nume complet">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name = "input_2" id="input_2" aria-describedby="emailHelp" placeholder="Introdu un email valid">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name = "input_3" id="input_3" aria-describedby="subiectHelp" placeholder="Subiect">
            </div>
            <div class="form-group">
                <textarea class="form-control" name = "input_4" id="input_4" rows="3" placeholder="Introdu un mesaj"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Trimite</button><button type="button" class="btn btn-primary"><a href="contacts_list.php" style="color:#ffffff; text-decoration:none;">Vezi contacte</a></button>
        </form>
    </div>

    <br><br><hr><br><br>
    <footer class="page-footer font-small mdb-color darken-3 pt-4">
        <div class="container">
        </div>
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://campeanu.github.io/Portfolio/index.html">Portfolio.com</a>
        </div>
    </footer>
<?php
    require 'footer.php'
?>
