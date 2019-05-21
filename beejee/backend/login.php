<!DOCTYPE html>
<html>
<head>
	<title>Панель управления</title>
	<?php include_once(DIRNAME."view/template/external.php"); ?>
</head>
<body>

	<div class="control-panel">
		
		<div class="admin-form">
			<h2>Панель управление</h2>

		

			<?php if(isset($errors) AND is_array($errors)): ?>
				<?php foreach ($errors as $error): ?>
					<p class="error"><?php echo $error; ?></p>
				<?php endforeach; ?>
			<?php endif; ?>

			<form method="POST">
				<input type="text" name="email" placeholder="Логин" <?php if($email): ?> value="<?php echo $email; ?>" <?php endif;?> ><br>
				<input type="password" name="password" placeholder="Пароль"><br>
				<button type="submit" name="admin_login">Вход</button>
			</form>

		</div>

	</div>

</body>
</html>