<?php
//USER PACKAGES/LIBARRY
// https://packagist.org/packages/gladcodes/keygen
require __DIR__ . '/vendor/autoload.php';
use Keygen\Keygen;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Key Generator</title>
	<style>
		body{
			text-align: center;
		}
	</style>
</head>
<body>
	Package : <a href="https://packagist.org/packages/gladcodes/keygen">gladcodes/keygen</a>
	<h1>Get your token number</h1>
	<!-- GET TOKEN -->
	<?php if (isset($_POST['generate'])): ?>
		<?php
		session_start();
		$token = $_POST['genToken'];
		$_SESSION['genToken'] = $token;
		echo 'copy: <strong>'.$token.'</strong>';
		?>
	<?php endif; ?>
	<br>
	<br>
	<form action="" method="POST">
		<!-- Click to generate -->
		<input type="hidden" name="genToken" value=" <?= Keygen::numeric(12)->generate(); ; ?>">
		<button type="submit" name="generate">Generate</button>
	</form>
	<hr>
	<form action="" method="POST">
		<input type="text" name="token" placeholder="paste here">
		<button type="submit" name="check">Check token</button>
	</form>
	<!-- CHECK TOKEN -->
	<?php 
		if (isset($_POST['check'])) 
		{
			session_start();
			$check = $_POST['token'];
			$token = $_SESSION['genToken'];
			if ($check == $token):
		?>
		<h3 style="color: green;">Your token is verified!</h3>
			<?php 
			endif;
		}
	?>
</body>
</html>