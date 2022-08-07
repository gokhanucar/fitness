<?php

function is_valid_email($email)
{
    
}

if (isset($_POST['register'])) {
    $email = escape_string($_POST['email']);
    $name = escape_string($_POST['name']);
    $surname = escape_string($_POST['surname']);
    $password = escape_string($_POST['password']);

    $passwordHash = password_hash($password, PASSWORD_BCRYPT, [
        'cost' => 12
    ]);

    $query = query("INSERT INTO users(email, name, surname, password) VALUES('{$email}','{$name}','{$surname}','{$passwordHash}')");
    confirm($query);

    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    $_SESSION['surname'] = $surname;

    redirect("index.php");
}

if (isset($_POST['login'])) {
    $email = escape_string($_POST['email']);
    $password = trim($_POST['password']);

    $query = query("SELECT * FROM users WHERE email = '{$email}'");
    confirm($query);

    while ($row = fetch_data($query)) {
        // if (password_verify())
    }
}

?>
