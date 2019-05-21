<!DOCTYPE html>
<html>
<head>	
	<title>Обновления задачи</title>	
	<?php include_once(DIRNAME."view/template/external.php"); ?>
</head>
<body>

<div class="container height100">

		<div class="column-3 height100">
		<div class="admin-menu">		
			<ul>
				<li>
					<a 
					<?php if($page == 'tasks'): ?> class="active" <?php endif; ?>
					href="<?php uri();?>admin/panel">
						<i class="fa fa-dolly-flatbed"></i> Задачи
					</a>
				</li>		
			</ul>	
		</div>
	</div>

	<div class="column-9 height100">

		<div class="admin-content height100">

			<div class="row admin-title">
				<div class="fleft pd30">
					<h3>имя пользователя: <?php echo $task["username"]; ?></h3>
					<h4>имэйл: <?php echo $task["email"]; ?></h4>
				</div>
			</div>

			<div class="row get-admin-items">
				
			<form method="POST">
				<div class="admin-form-control">				

					<div class="admin-form-item">
						<label>Описание</label>
						<textarea name="description"><?php echo $task["description"]; ?></textarea>
					</div>


					<div class="admin-form-item">
						нажмите на галочку для смены статуса:
						<?php if($task["done"]==1): ?>
								<a href="<?php uri();?>admin/panel/task/deactive/<?php echo $task["id"];?> " class="deactiveItem activeHovRed"><i class="fas fa-check"></i></a>
									<?php else: ?>
								<a href="<?php uri() ?>admin/panel/task/active/<?php echo $task["id"]; ?>" class="activeItem activeHovGreen"><i class="fas fa-check"></i></a>	
						<?php endif; ?>
					</div>				


					<div class="admin-form-item cntr">
						<button type="submit" name="update_task">Обновить</button>
					</div>

				</div>
			</form>
				
				
			</div>
		</div>



	</div>
</div>



</body>
</html>