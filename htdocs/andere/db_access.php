<?php

    $dbh = new PDO('mysql:host=localhost;dbname=chat_naxt', 'root', '');

    $sth = $dbh -> query("SELECT * FROM chats");
    $chats = $sth->fetchAll();

    $sth = $dbh -> query("UPDATE chats SET title='abc' WHERE id = 1");
    $sth -> execute();



    foreach ($chats as $chat) { ?>
        <h1><?= $chat["title"] ?></h1>
    <?php } ?>