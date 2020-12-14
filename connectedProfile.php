<?php session_start(); ?>

<p>
	Bienvenue sur votre espace personnel
	<?php
		$user_id = $_SESSION['user_id'];
		$firstname = $_SESSION['firstname'];
		$lastname = $_SESSION['lastname'];
		$email = $_SESSION['email'];
		$company_id = $_SESSION['company_id'];
		$manager_id = $_SESSION['manager_id'];
		echo "$firstname $lastname";
	?>
</p>