<?php

function createChatInfo($cleanReply, $pdo, $activeChat) {
    echo 'Hallooooooo';
    $preview = substr($cleanReply, 0, 15);


    try {
        // Aktualisiert den bestehenden Chat-Eintrag mit der neuen Vorschau
        $stmt = $pdo->prepare("UPDATE chats SET preview = :preview, updated_at = :updated_at WHERE id = :id");
        $stmt->bindParam(':preview', $preview);
        
        // Optional: aktualisiere auch das Änderungsdatum
        $updatedAt = date('Y-m-d H:i:s');
        $stmt->bindParam(':updated_at', $updatedAt);
        $stmt->bindParam(':id', $activeChat);

        $stmt->execute();
    } catch (PDOException $e) {
        echo "Fehler beim Aktualisieren der Vorschau: " . $e->getMessage();
    }
}



?>