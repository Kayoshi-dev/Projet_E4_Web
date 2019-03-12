<?php

require_once 'public/template/header.php';

?>

<section id="cover"> 
    <div class="container"> 
        <div class="row"> 
            <div class="offset-lg-4 col-lg-4 form-block"> 
                <form action="index.php" method="post">
                    <div class="form-group"> 
                        <label for="login"> Login </label>  
                        <input type="text" id="login" name="login" placeholder="Saisir login" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="password"> Mot de passe </label> 
                        <input type="password" id="password" name="password" placeholder="Saisir mot de passe" class="form-control">
                    </div>
                        <div class="button">
                            <button type="button" class="btn btn-dark"> Valider </button>
                        </div>
                </form>
</section>

<?php
require_once 'public/template/footer.php';
?>

