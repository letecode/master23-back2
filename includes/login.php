<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo json_encode([$email, $password]);
?>