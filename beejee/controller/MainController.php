<?php
class MainController{

	public function actionIndex($category, $sort='default',$pagination =1){

		$pagination = intval($pagination);

		$limit= 3;
		$paginationHTML = false;

		$toDoLists = false;

		$sort_url = false;	

		if($category =="all"){
			
			$toDoLists = Todolist::getTodoList($sort, $pagination);
			$total = Todolist::getCountTodoList();
			$sort_url = "sorting/";
			if($total>$limit){
				$pg = new Pagination($total,$pagination,$limit,"page-");
				$paginationHTML = $pg->get();
			}

		}		
	
		

		include_once(DIRNAME.'view/main.php');
		return true;
	}


	public function actionAddtask(){

		if(isset($_POST["addTask"])){
			$userName = $_POST["userName"];
			$userEmail = $_POST["userEmail"];
			$description = $_POST["description"];

			Todolist::addTodoList($userName,$userEmail,$description);
			header("Location:/");

		}

				
			
		include_once(DIRNAME.'view/addtask.php');
		return true;
	}







}
?>