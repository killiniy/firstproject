<?php

try {
    $dsn = 'mysql:host=localhost;port=3306;dbname=feedback';
    $pdo = new PDO($dsn, 'mysql', 'mysql');
} catch (PDOException $e){
    echo $e->getMessage();
}

foreach($pdo->query('SELECT * from users') as $row) {
    echo $row;

}
?>