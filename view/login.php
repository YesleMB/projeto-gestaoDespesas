<?php
			include_once '..\DAO\conexao.php';



	
		?>
<!DOCTYPE html>
<html lang="en">
		
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
			<form method="post" action ='menu.php'>
			<label for="nome">nome</label>
			<input type="text" required>
			<br>
			<label for="senha">senha</label>
			<input type="password" required >
			<input type="submit" value="login">


			</form>

		
	</body>
		
</html>