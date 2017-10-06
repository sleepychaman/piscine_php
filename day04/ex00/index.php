<?php session_start(); ?>
<html>
 <head><title>Formulaire</title></head>
    <body>
		<h1>Bienvenue sur H2G2</h1>
		<h2>modifier votre login ou votre mot de passe ici !</h2>
		<form method="post" action="index.php">
			<label for="login">login:</label>
			<input type="text" name="login"<?php echo 'value="'. $_SESSION['login'] .'"';?>/><br/>
			<label for="passwd">passwd:</label>
			<input type="text" name="passwd"<?php echo 'value="'. $_SESSION['passwd'] .'"';?>/><br/>
			<input type="submit" name="submit" value="OK"/>
		</form>
		<?php
			if (isset($_GET['submit'])) {
				$_SESSION['login'] = $_GET['login'];
				$_SESSION['passwd'] = $_GET['passwd'];
			}
		?>
   	 </body>
</html>