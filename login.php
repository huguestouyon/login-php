<?php
var_dump($_POST);
$user = $_POST['username'];
$pass = $_POST['pass'];
try {
    $dbh = new PDO('mysql:host=localhost;dbname=member;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
if (!empty($_POST['submit'])) {
    $query = $dbh->prepare("SELECT * FROM users");
    $query->execute();
    foreach ($query as $row) {
        if (password_verify($pass, $row['pass']) && $row['name'] === $user) {
            echo "Bonjour " . $row['name'];
        } 
        else {
            echo 'test';
            header("Location: index.php");
        }
    }
}
?>