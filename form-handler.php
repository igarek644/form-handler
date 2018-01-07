<?php
    $name = trim($_POST['name']);
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    if($name == "" || $phone == "" || $email == "") {
        echo "input all data";
        return;
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "email is not valid";
        return;
    }
    if(!preg_match('/^[0-9]{3}[0-9]{3}[0-9]{4}$/', $phone)) {
        echo "phone is not valid";
        return;
    }

    echo 1;