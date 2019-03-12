<?php

require_once 'public/template/header.php';

?>

<section id="cover"> 
    <div class="container"> 
        <div class="row"> 
            <div class="offset-lg-4 col-lg-4 form-block">
                <form action="public/template/login.php" method="post">
                    <h4>Page de connexion</h4>
                    <hr>
                    <br>
                    <div class="form-group"> 
                        <label for="login">Login</label>  
                        <input type="text" id="login" name="login" placeholder="Saisir login" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label> 
                        <input type="password" id="password" name="password" placeholder="Saisir mot de passe" class="form-control">
                    </div>
                    <br>
                    <div class="button">
                        <button type="submit" class="btn btn-outline-dark">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'public/template/footer.php';
?>

