<?php

// Simple script permettant de changer la couleur de fond d'une mission selon son statut.

/**
 * @param $missValide
 * @return string
 */
function checkColor($missValide) {
    if($missValide == 'Validée ✅') {
        return $background = '#2ecc71';
    } else {
        return $background = '#f39c12';
    }
}