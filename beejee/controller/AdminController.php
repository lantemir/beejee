<?php 
class AdminController{

	public function actionLogin(){

		

		$email = false;
		$password = false;

		if(isset($_POST["admin_login"])){
			$email = $_POST["email"];
			$password = $_POST["password"];

			$errors = false;

			$userID = Admin::checkData($email,$password);

			if($userID == 0){
				$errors[] = "Неверный Логин и(или) Пароль";
			}

			if(!$errors){				
				header("Location:/admin/panel");
			}
		}

		include_once(DIRNAME."backend/login.php");
		return true;
	}



	public function actionPanel(){
		
		$page = 'tasks';	
		$tasks = Todolist::getAllTasks();

	

		include_once(DIRNAME."backend/panel.php");
		return true;
	}

	

}

?>