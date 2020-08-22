<?php
$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];

echo $email . " ". $name . " ". $message;

try {
    $dsn = 'mysql:host=localhost;port=3306;dbname=feedback';
    $pdo = new PDO($dsn, 'mysql', 'mysql');
    $sql = "INSERT INTO users(email,name,message) VALUES (?,?,?)";
    $query = $pdo->prepare($sql);
    $query->execute([$email, $name, $message]);

} catch (PDOException $e){
    echo $e->getMessage();
}




echo "ok"
?>