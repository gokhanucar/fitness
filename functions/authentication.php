<?php

function is_unique_email($email)
{
    $query = query("SELECT * FROM users WHERE email = '{$email}'");
    confirm($query);

    if (fetch_count($query) > 0) {
        return false;
    }

    return true;
}

function save_user_session($email, $name, $surname)
{
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    $_SESSION['surname'] = $surname;
}

if (isset($_POST['register'])) {
    $email = escape_string($_POST['email']);

    if (is_unique_email($email)) {
        $name = escape_string($_POST['name']);
        $surname = escape_string($_POST['surname']);
        $password = escape_string($_POST['password']);
    
        $passwordHash = password_hash($password, PASSWORD_BCRYPT, [
            'cost' => 12
        ]);
    
        $query = query("INSERT INTO users(email, name, surname, password) VALUES('{$email}','{$name}','{$surname}','{$passwordHash}')");
        confirm($query);
        save_user_session($email, $name, $surname);
        redirect("index.php");
    } else {
        set_notification("This email address has been used before.", 
        "User Existing!", "notice");
    }
}

if (isset($_POST['login'])) {
    $email = escape_string($_POST['email']);
    $password = trim($_POST['password']);

    $query = query("SELECT * FROM users WHERE email = '{$email}'");
    confirm($query);

    $row = fetch_data($query);
    if ($row) {
        if (password_verify($password, $row['password'])) {
            save_user_session($row['email'], $row['name'], $row['surname']);
            redirect("index.php");
        } else {
            set_notification("You entered your password incorrectly. Please try again.", 
            "Wrong Password!", "error");
        }
    } else {
        set_notification("No registered user found with this email address. Make sure you enter email address correctly or you can register.", 
        "User Not Found!", "notice");
    }
}

?>
