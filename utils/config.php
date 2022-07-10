<?php

require_once "configs/env.php";

ob_start();
session_start();

defined("DB_HOST") ? null : define("DB_HOST", $configs["DB_HOST"]);
defined("DB_USER") ? null : define("DB_USER", $configs["DB_USER"]);
defined("DB_PASS") ? null : define("DB_PASS", $configs["DB_PASS"]);
defined("DB_NAME") ? null : define("DB_NAME", $configs["DB_NAME"]);

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);