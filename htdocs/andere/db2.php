<?php

$db = new PDO("sqlite:{$_SERVER['DOCUMENT_ROOT']}/blog.db");
$dbh = new PDO("sqlite:/blog.db");

// Wenn ich Daten manipulieren möchte, dann:
$dbh->query(
    "INSERT INTO articles 
        (title, content) 
        VALUES 
         (
          {$dbh->quote($_POST['title'])}, 
          {$dbh->quote($_POST['content'])}
        )"
);
?>