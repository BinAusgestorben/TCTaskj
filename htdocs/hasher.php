<?php 

$user = "SELECT ...";

$isloggedIn = md5($_POST['password']) === $user['password_hash'];

if ($isloggedIn) {
    echo "Login erfolgreich";
}