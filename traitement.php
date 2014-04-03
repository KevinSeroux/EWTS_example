<?php
	$db = new mysqli("localhost", "utilisateur", "mot de passe");
	if($db->connect_errno)
	{
		exit();
	}

	if(!$db->select_db("kseroux_ewts"))
	{
		exit();
	}
	
	$request = "SELECT id FROM login WHERE id = '" . $_POST["username"] . "';";
	$answer = $db->query($request);
	

	if($answer->num_rows == 0)
	{
		header("Location: index.php?error=badid");
	}
	else
	{
		$request = "SELECT password FROM login WHERE id = '" . $_POST["username"] . "';";
		$answer = $db->query($request);

		if($answer->fetch_row()[0] == $_POST["password"])
		{
			session_start();
			$_SESSION['username'] = $_POST["username"];

			header("Location: accueil.php");
		}
		else
		{
			header("Location: index.php?error=badpwd");
		}
	}
	
	$db->close();
?>

<p>Si vous voyez cette page, veuillez vous rediriger manuellement</p>
