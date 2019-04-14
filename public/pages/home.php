<?php

$title = 'Accueil 🏠';

require '../template/header.php';
require '../functions/menu_nav.php';

$script_name = basename(__FILE__, '.php');

menu_nav($script_name);

echo 'ID : ' . $_SESSION['User_ID'] . '<br>';
echo 'Responsable : ' . $_SESSION['Responsable'] . '<br>';
echo 'Comptable : ' . $_SESSION['Comptable'] . '<br>';
