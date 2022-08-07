<?php

if (!isset($_SESSION['email'])) {
    redirect("login.php");
}

?>