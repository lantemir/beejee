<?php 
class AdminTaskController{


	public function actionDeactive($id){
		
		$id = intval($id);
		Todolist::deactiveTask($id);
		header("Location:/admin/panel");
		return true;
	}

	public function actionActive($id){
		
		$id = intval($id);
		Todolist::activeTask($id);
		header("Location:/admin/panel");
		return true;
	}

	
	public function actionUpdate($id){

	
		$page = 'tasks';
		$id = intval($id);

		$task = Todolist::getTaskByID($id);

		$description = false;
		

		if(isset($_POST["update_task"])){
			$description = $_POST["description"];			

			Todolist::updateTask($id,$description);
			header("Location:/admin/panel");
		}


		include_once(DIRNAME."backend/taskUpdate.php");
		return true;
	}

}

?>