<?php 
class Admin{

	public static function checkData($email,$password){
		$db = DB::getConnection();

		$sql = "SELECT * FROM admins WHERE login = :email AND password = :password";

		$result = $db->prepare($sql);
		$result->bindParam(":email",$email,PDO::PARAM_STR);
		$result->bindParam(":password",$password,PDO::PARAM_STR);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();

		$data = $result->fetch();

		if($data)
			return intval($data["id"]);
		else
			return 0;
	}

}

?>