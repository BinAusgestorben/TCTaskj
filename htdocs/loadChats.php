<?php



function loadChats($pdo, $userid) {
    $stmt = $pdo->prepare("
        SELECT id, title, updated_at, preview 
        FROM chats 
        WHERE user_id = :userid
        ORDER BY updated_at DESC
    ");
    $stmt->bindParam(':userid', $userid, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt;
}


function loadMessages($pdo, $chat_id, $userid) {
    $stmt = $pdo->prepare("
        SELECT m.role AS sender, m.content AS message, m.timestamp 
        FROM messages m
        JOIN chats c ON m.chat_id = c.id
        WHERE m.chat_id = :chat_id AND c.user_id = :userid
        ORDER BY m.timestamp ASC
    ");
    $stmt->bindParam(':chat_id', $chat_id, PDO::PARAM_INT);
    $stmt->bindParam(':userid', $userid, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt;
}



?>