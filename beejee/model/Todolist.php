<?php
class Todolist{


	public static function getTodoList($sort,$pagination){
		$db = DB::getConnection();
		$get = array();
		$pagination = intval($pagination);

		$num = 3;
		$limit = $num;
		$offset = ($pagination - 1)*$num;

		if($sort == 'default'){
			$sql = "SELECT * FROM todolist  ORDER BY id DESC LIMIT :lim OFFSET :off";
		}

		if($sort == 'name'){
			$sql = "SELECT * FROM todolist  ORDER BY username LIMIT :lim OFFSET :off";
		}
		if($sort == 'email'){
			$sql = "SELECT * FROM todolist  ORDER BY email LIMIT :lim OFFSET :off";
		}			
		if($sort == 'status'){
			$sql = "SELECT * FROM todolist  ORDER BY done DESC LIMIT :lim OFFSET :off";
		}		

			
		
		$result = $db->prepare($sql);

		$result->bindParam(":lim", $limit, PDO::PARAM_INT);
		$result->bindParam(":off", $offset, PDO::PARAM_INT);

		$result->execute();

		$i=0;
		while ($row = $result->fetch()) {
			$get[$i]["id"] = $row["id"];
			$get[$i]["username"] = $row["username"];
			$get[$i]["email"] = $row["email"];
			$get[$i]["description"] = $row["description"];
			$get[$i]["done"] = $row["done"];			
			$i++;
		}
		return $get;
	}

	public static function addTodoList($username, $useremail, $description){
		$db = DB::getConnection();
		$done = 0;

		$sql = "INSERT INTO todolist (username,email,description,done) 
					VALUES(:username,:useremail,:description,:done)";

		$result = $db->prepare($sql);
		$result->bindParam(":username",$username,PDO::PARAM_STR);
		$result->bindParam(":useremail",$useremail,PDO::PARAM_STR);		
		$result->bindParam(":description",$description,PDO::PARAM_STR);
		$result->bindParam(":done",$done,PDO::PARAM_INT);	

		return $result->execute();

	}	

	public static function getCountTodoList(){
		$db = DB::getConnection();
		$sql = "SELECT count(*) FROM todolist";

		$result = $db->prepare($sql);
		$result ->execute();

		$data = $result->fetch();
		return $data[0];

	}

	public static function getAllTasks(){
		$db = DB::getConnection();
		$get = array();

		$sql = "SELECT * FROM todolist ORDER BY id DESC";

		$result = $db->prepare($sql);
		$result ->execute();

		$i=0;
		while ($row = $result->fetch()) {
			$get[$i]["id"] = $row["id"];
			$get[$i]["username"] = $row["username"];
			$get[$i]["email"] = $row["email"];
			$get[$i]["description"] = $row["description"];
			$get[$i]["done"] = $row["done"];			
			$i++;
		}
		return $get;
	}


	public static function getTaskByID($id){
		$db = DB::getConnection();

		$sql = "SELECT * FROM todolist WHERE id = :id";
		$result = $db->prepare($sql);
		$result -> bindParam(":id", $id, PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();

		return $result->fetch();
	}


	public static function updateTask($id,$description){
		$db = DB::getConnection();

		$sql = "UPDATE todolist SET	description = :description WHERE id = :id";

		$result = $db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);		
		$result->bindParam(":description",$description,PDO::PARAM_STR);	
		return $result->execute();
	}

	public static function deactiveTask($id){
		$db = DB::getConnection();

		$sql = "UPDATE todolist SET done = 0 WHERE id = :id";

		$result = $db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		
		return $result->execute();
	}

	public static function activeTask($id){
		$db = DB::getConnection();

		$sql = "UPDATE todolist SET done = 1 WHERE id = :id";

		$result = $db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		
		return $result->execute();
	}
	
}
?>


