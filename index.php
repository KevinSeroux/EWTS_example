<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Connexion - EWTS</title>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/starter-template.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
  	    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  	    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  	  <![endif]-->
	</head>
	<body>
		<?php
			session_start();

			if(isset($_SESSION["username"]))
				header("Location: accueil.php");

			if(!empty($_GET["error"]))
			{
				if($_GET["error"] == "badid")
				{
					echo "<p>Mauvais identifiant</p>";
				}
				else if($_GET["error"] == "badpwd")
				{
					echo "<p>Mauvais mot de passe !</p>";
				}
				else if($_GET["error"] == "authrequired")
				{
					echo "<p>Pour accéder à cette page, vous devez vous connecter !</p>";
				}
			}
		?>
		
		<h1>Connectez-vous</h1>
		<form role="form" method="post" action="traitement.php">
  			<div class="form-group">
    				<label>Email address</label>
    				<input type="text" class="form-control" name="username" placeholder="Entrez votre identifiant">
 			</div>
  			<div class="form-group">
    				<label>Password</label>
    				<input type="password" class="form-control" name="password" placeholder="Mot de passe">
  			</div>
  			<button type="submit" class="btn btn-default">Envoyer</button>
		</form>


		<!-- Bootstrap core JavaScript
   		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script
			src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
