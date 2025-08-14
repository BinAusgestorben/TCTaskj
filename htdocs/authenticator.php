<?php

require_once 'createUser.php';

function checkAuth($pdo){
    return isset($_SESSION['auth']) && $_SESSION['auth'] === true;
}


function authenticate($pdo, $uname, $pw) {
    $storedHash = loadUserPassword($pdo, $uname);
    
    if ($storedHash && password_verify($pw, $storedHash)) {
        $_SESSION['auth'] = true;
        $_SESSION['nm'] = $uname;
        $_SESSION['userid'] = loadUserId($pdo, $uname);
        echo "Login erfolgreich";
        return true;
    } else {
        $_SESSION['auth'] = false;
        echo "Login fehlgeschlagen";
        return false;
    }
}



function loadUserPassword($pdo, $uname) {
    $stmt = $pdo->prepare("
        SELECT password 
        FROM users 
        WHERE name = :name
        LIMIT 1
    ");
    $stmt->bindParam(':name', $uname);
    $stmt->execute();
    return $stmt->fetchColumn();
}


function loadUserId($pdo, $uname) {
    $stmt = $pdo->prepare("
        SELECT id 
        FROM users 
        WHERE name = :name
        LIMIT 1
    ");
    $stmt->bindParam(':name', $uname);
    $stmt->execute();
    return $stmt->fetchColumn();
}



function createAuthPopup() {
    $showError = isset($_SESSION['noLogin']) && $_SESSION['noLogin'] === true;

    echo '
    <div id="authPopup" class="modal">
        <div class="modal-content">
            <h2>🔐 Login / Registrierung</h2>
            <form method="post" class="login-form">
                <label for="username">Benutzername</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Passwort</label>
                <input type="password" id="password" name="password" required>';

                if ($showError) {
                    echo '<p class="error-message">Login fehlgeschlagen. Bitte erneut versuchen.</p>';
                }

    echo '
                <input type="hidden" id="actionType" name="actionType" value="login">

                <button type="submit" onclick="document.getElementById(\'actionType\').value = \'login\'">Einloggen</button>
                <button type="submit" onclick="document.getElementById(\'actionType\').value = \'register\'">Registrieren</button>
            </form>
        </div>
    </div>

    <script>
        window.onload = function() {
            document.getElementById("authPopup").style.display = "block";
        };
    </script>
    ';
}






function getAuthCredentials() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['username'] ?? null;
        $password = $_POST['password'] ?? null;
        return [$name, $password];
    }
    return [null, null];
}



function handleAuth($pdo) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'], $_POST['password'], $_POST['actionType'])) {
        $uname = $_POST['username'];
        $pw = $_POST['password'];
        $action = $_POST['actionType'];

        if ($action === 'register') {
            // Benutzer registrieren
            addUser($pdo, $uname, $pw);

            // Optional: direkt einloggen
            $_SESSION['credentials'] = [$uname, $pw];
            unset($_SESSION['noLogin']);
        } elseif ($action === 'login') {
            $_SESSION['credentials'] = [$uname, $pw];

            if (!authenticate($pdo, $uname, $pw)) {
                $_SESSION['noLogin'] = true;
            } else {
                unset($_SESSION['noLogin']);
            }
        }
    }

    if (!checkAuth($pdo)) {
        createAuthPopup();
        exit;
    }
}






?>
