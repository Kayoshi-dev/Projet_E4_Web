<?php

/**
 * @param $missAttente
 * @return string
 */
function checkColor($missAttente) {
    if($missAttente == 'Validée') {
        return $background = '#2ecc71';
    } else {
        return $background = '#f39c12';
    }
}