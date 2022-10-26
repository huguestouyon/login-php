<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login 🔐</title>
    <style>
        body {
            background-color: #343A40;
            color: #fff;
            height: 100vh;
        }
    </style>
</head>

<body>
    <main>
        <h1>Login 🔐</h1>
        <p>Pseudo = jean</p>
        <p>Pass = motdepass</p>
        <form action="" method="post">
            <div>
                <label for="msg">Pseudo :</label>
                <input value="" type="text" id="name" name="user_name" required>
            </div>
            <div>
                <label for="msg">Password :</label>
                <input value="" type="password" id="pswd" name="user_pswd" required>
            </div>
            <input type="submit" name="submit" value="Envoyer">
        </form>
        <?php
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=member;charset=utf8', 'root', 'root');
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }        
        if (!empty($_POST['submit'])) {    
            $query = $dbh->prepare("SELECT * FROM users");
            $query->execute();
            foreach($query as $row) {
                if(password_verify($_POST['user_pswd'], $row['pass']) && $row['name']===$_POST['user_name']) {
                    ?><script> document.querySelector('form').style.display = "none"</script><?php
                    echo "Bonjour " . $row['name'];
                }
                else {
                    echo 'Échec';
                }
            }
        }
        ?>
    </main>
</body>

</html>