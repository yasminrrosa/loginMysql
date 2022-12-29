<?php 

include_once 'carregar.php';



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página de login</title>
</head>
<body>
	<form action="carregar.php" method="POST">
		<fieldset>
			<label>Login:</label><br>
			<input type="text" name="login" required autofocus>
			<label>Senha:</label>
			<input type="passaword" name="senha" required autofocus><br>
			<br><br>
			<input type="submit" name="btn-enviar" value="Fazer login">

		</fieldset>



	</form>

</body>
</html>                                                                                                                                                                                                                              