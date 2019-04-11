<?php

function DestroyReturn()
{
    session_start();
    session_destroy();
    header('Location: ../../index.php');
}

