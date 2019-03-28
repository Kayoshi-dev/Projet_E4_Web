<?php

/**
 * @param null $script_name
 */
function menu_nav($script_name = null)
{
    if ($script_name != 'index') {
        $menu = '
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Epoka Mission</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil</a>
                </li>';
        if ($_SESSION['Responsable'] == 1) {
            $menu .= '<li class="nav-item">
                            <a class="nav-link" href="../pages/validMissions.php">Validation des missions</a>
                        </li>';
        }
        if ($_SESSION['Responsable'] == 0) {
            $menu .= '<li class="nav-item">
                        <a class="nav-link" href="#">Paiement des frais</a>
                     </li>';
        }

        $menu .= '
                <li class="nav-item">
                        <a class="nav-link" href="../pages/settings.php">Paramétrage</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="logoff.php">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </nav>';
        echo $menu;
    }
}