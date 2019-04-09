<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
	<?php
		include_once 'class.php';
		$form = new Form();

		$form->open(['action' => 'index.php', 'method' => 'POST']);

		$form->input(['type' => 'text', 'class' =>'form-control', 'placeholder' => 'Login', 'name' => 'login']);
		$form->password(['placeholder' => 'Password', 'name' => 'password']);
		
		$form->textarea(['placeholder' => 'Enter text', 'name' => 'text']);
		
		$form->sumbit(['value' => 'go', 'name' => 'sumbit']);

		$form->close([]);
	?>
</body>
</html>