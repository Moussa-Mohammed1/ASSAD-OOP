<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'assad');

    include 'database.php';
    $pdo = new Database();
    $value = 'Moussa';
    $sql = 'SELECT * FROM utilisateur WHERE nom = :nom';
    $pdo->query($sql);
    $pdo->bind(':nom', $value);
    $result = $pdo->get();
    
    foreach($result as $row){
        echo $row->email;
    }

    
    
