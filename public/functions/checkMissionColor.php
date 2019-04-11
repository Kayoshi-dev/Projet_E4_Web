<?php

/**
 * @param $missValide
 * @return string
 */
function checkColor($missValide) {
    if($missValide == 'Validée') {
        return $background = '#2ecc71';
    } else {
        return $background = '#f39c12';
    }
}