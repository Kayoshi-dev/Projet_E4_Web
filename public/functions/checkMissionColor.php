<?php

/**
 * @param $missValide
 * @return string
 */
function checkColor($missValide, $missRembourse) {
    if($missValide == 'Validée' && $missRembourse == 'Payée') {
        return $background = '#2ecc71';
    } else {
        return $background = '#f39c12';
    }
}