<?php

$host = 'localhost';    
$dbname = 'chat_naxt';
$username = 'root';
$password = '';

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

function addMessage($content, $role, $timestamp, $chat_id, $pdo) {
 try{   
    

    $stmt = $pdo->prepare("INSERT INTO messages (role, content, timestamp, chat_id) VALUES (:role, :content, :timestamp, :chat_id)");
    $stmt->bindParam(':role', $role);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':timestamp', $timestamp);
    $stmt->bindParam(':chat_id', $chat_id);

    $stmt->execute();

    


} catch (PDOException $e) {
    echo "Fehler bei der Verbindung oder beim Einfügen: " . $e->getMessage();
}}
?>