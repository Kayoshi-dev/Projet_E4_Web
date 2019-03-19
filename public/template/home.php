<?php

require 'header.php';
require '../functions/menu_nav.php';

$script_name = basename(__FILE__, '.php');

menu_nav($script_name);

?>

<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
    <div class="toast" style="position: absolute; top: 0; right: 0;">
        <div class="toast-header">
            <img src="../img/icon.png" class="rounded mr-2" alt="...">
            <strong class="mr-auto">Bienvenue</strong>
            <small>À l'instant</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            Bon retour sur Epoka <?= $_SESSION['Prenom'] . ' ' . $_SESSION['Nom'] . ' !' ?>
        </div>
    </div>
</div>

<?php

require 'footer.php';