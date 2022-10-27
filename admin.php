<?php
session_start();
if(isset($_SESSION["user"])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V16</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="admin.php">Administration</a>
                        </li>
                    </ul>
                </div>
				<span class="mr-3 text-left"> <?php echo "Bonjour, " . $_SESSION['user'];   ?></span>
				<button onclick="location.href='logout.php'" class="btn btn-danger">Déconnexion</button>
            </nav>
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100 p-t-30 p-b-50">
					<span class="login100-form-title p-b-41">
						Ajouter un compte administrateur
					</span>
					<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="">

						<div class="wrap-input100 validate-input" data-validate="Enter username">
							<input class="input100" type="text" name="pseudo" placeholder="Nom d'utilisateur">
							<span class="focus-input100" data-placeholder="&#xe82a;"></span>
						</div>
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
							<input class="input100" type="password" name="pass" placeholder="Nouveau mot de passe">
							<span class="focus-input100" data-placeholder="&#xe80f;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input class="input100" type="password" name="pass" placeholder="Retaper">
							<span class="focus-input100" data-placeholder="&#xe80f;"></span>
						</div>
						<?php
						if (isset($response)) {
							echo '<p class="text-danger text-center mt-3">' . $response . '</p>';
						}
						?>
						<div class="container-login100-form-btn m-t-3">

							<input type="submit" class="login100-form-btn mt-5" name="submit" value="Envoyer">
						</div>
					</form>
				</div>
        </div>
    </div>
</body>
<?php 
}
?>