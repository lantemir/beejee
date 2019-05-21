<!DOCTYPE html>
<html>
<head>
	<title>Список задач</title>
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
						 Задачи
					</a>
				</li>		
			</ul>	
		</div>
	</div>
	

	<div class="column-9 height100">


			<h1 class="cntr">Панель управления</h1>

		<?php foreach($tasks as $task): ?>
			<div class="admin-item">
				<a href="<?php uri(); ?>admin/panel/task/update/<?php echo $task["id"]; ?>">
					<ul>						
						<li class="column-3">
							<p>email:<br><?php echo $task["email"] ?></p>							
						</li>
						<li class="column-6">
							<p>описание:<br><?php echo $task["description"] ?></p>	
						</li>
						<li class="column-1">
							 <?php if($task["done"]==1): ?>
                                <a class="deactiveItem fright done"><i class="fas fa-check"></i></a>
                            <?php else: ?>
                                <a class="activeItem fright done"><i class="fas fa-check"></i></a>
                            <?php endif; ?>
						</li>
						<li class="column-2">
							<a href="<?php uri(); ?>admin/panel/task/update/<?php echo $task["id"]; ?>">обновить</a>
						</li>
						<div class="clear"></div>
					</ul>
				</a>
			</div>

		<?php endforeach; ?>	



	</div>



</div>



</body>
</html>



