<!DOCTYPE html>
<html>
<head>
	<title>Добавление задачи</title>
	<?php include_once(DIRNAME."view/template/external.php"); ?>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <h1 class="cntr pd30">Добавление задачи</h1><br>
           
           <form method="POST">
           		<div class="row">
           			<div class="column-6">
           				<input type="text" name="userName" placeholder="Имя" required>
           			</div>
           			<div class="column-6">
           				<input type="text" name="userEmail" placeholder="Имэйл" required>
           			</div>
           		</div>
           		<div class="clear"></div>
           		<div class="row">
           			<div class="column-12">
           				<textarea name="description" placeholder="Текст для задачника" required>
           					
           				</textarea>
           			</div>
           		</div>
           		<button type="submit" name="addTask" class="btnToAddTask">Создать </button>
           	
           </form>

                      

        </div>
    </div>

</body>
</html>