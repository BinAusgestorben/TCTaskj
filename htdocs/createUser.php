<?php 
function addUser($pdo, $name, $unhashedPassword) {
    $password = password_hash($unhashedPassword, PASSWORD_DEFAULT);
    try {   
        $stmt = $pdo->prepare("INSERT INTO users (name, password) VALUES (:name, :password)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Fehler bei der Verbindung oder beim Einfügen: " . $e->getMessage();
    }
}
?>