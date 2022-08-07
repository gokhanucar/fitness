<?php

function confirm($result)
{
    global $connection;

    if (!$result && APP_ENV !== "production") {
        die("QUERY FAILED " . mysqli_error($connection));
    }
}

function escape_string($input)
{
    global $connection;

    return mysqli_real_escape_string($connection, $input);
}

function query($sql)
{
    global $connection;

    return mysqli_query($connection, $sql);
}

function fetch_data($result)
{
    return mysqli_fetch_assoc($result);
}

function fetch_count($result)
{
    return mysqli_num_rows($result);
}

?>

