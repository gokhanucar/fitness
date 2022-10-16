<?php

if (!isset($_SESSION['email'])) {
    redirect("login.php");
}

if (isset($_GET['logout'])) {
    if (session_unset()) {
        redirect("login.php");
    }
}

?>