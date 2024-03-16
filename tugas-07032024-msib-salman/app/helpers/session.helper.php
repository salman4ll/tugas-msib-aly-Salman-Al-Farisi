<?php

function isLoggedIn()
{
    session_start();
    if (isset($_SESSION['id_admin'])) {
        return true;
    } else {
        return false;
    }
}

