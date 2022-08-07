<?php

function set_notification($message, $title = "Notification", $type = "info")
{
    $_SESSION['notification'] = [
        'title' => $title,
        'message' => $message,
        'type' => $type
    ];
}

function get_notification()
{
    if (isset($_SESSION['notification'])) {
        $notification = $_SESSION['notification'];
        unset($_SESSION['notification']);
        return $notification;
    }
}

?>