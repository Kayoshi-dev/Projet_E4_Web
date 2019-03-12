<?php

require_once 'public/template/header.php';

?>

<section id="cover"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-lg"> 
                <form action="index.php" method="post">
                    <div class="form-group"> 
                        <label for="login"> Login </label>  
                        <input type="text" id="login" name="login" placeholder="Saisir login" class=""> 
                    </div>
                    <div class="form-group">
                        <label for="mdp"> Mot de passe </label> 
                        <input type="password" id="password" name="password" placeholder="Saisir mot de passe" class="">
                    </div>
                    <button type="button" class="btn btn-dark"> Valider </button>
                </form>
</section>

<?php
require_once 'public/template/footer.php';
?>

