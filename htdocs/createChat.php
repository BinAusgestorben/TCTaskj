<?php

$host = 'localhost';    
$dbname = 'chat_naxt';
$username = 'root';
$password = '';

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

function addChat($title, $timestamp, $preview, $userid, $pdo) {
    //var_dump($title, $timestamp, $preview, $userid, $pdo);
 try{   
    $stmt = $pdo->prepare("INSERT INTO chats (title, created_at, updated_at, preview, user_id) VALUES (:title, :created_at, :updated_at, :preview, :userid)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':created_at', $timestamp);
    $stmt->bindParam(':updated_at', $timestamp);
    $stmt->bindParam(':preview', $preview);
    $stmt->bindParam(':userid', $userid);
    echo "geklappt";
    $stmt->execute();
} catch (PDOException $e) {
    echo "Fehler bei der Verbindung oder beim Einfügen: " . $e->getMessage();
}}
?>