<?php

//Ce script génère le menu en fonction des rôles de l'utilisateur et de la page sur laquelle on se situe.
//Par défaut $script_name est nul, si l'on se trouve sur la page index.php, le menu ne sera pas affiché.

/**
 * @param null $script_name
 */
function menu_nav($script_name = null)
{
    if ($script_name != 'index') {
        $menu = '
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../index.php">Epoka Mission</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../pages/home.php">Accueil</a>
                </li>';
        if ($_SESSION['Responsable'] == 1) {
            $menu .= '<li class="nav-item">
                            <a class="nav-link" href="../pages/showMissions.php">Validation des missions</a>
                        </li>';
        }
        if ($_SESSION['Comptable'] == 1) {
            $menu .= '<li class="nav-item">
                        <a class="nav-link" href="../pages/showMissions.php">Paiement des frais</a>
                     </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/settings.php">Paramétrage</a>
                    </li>';
        }
        $menu .= '
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