<?php 
class Router
{
	private $routes;
	public function __construct(){
		$this->routes = include(DIRNAME.'config/routes.php');
	}
	private function getURI(){
		if(isset($_SERVER["REQUEST_URI"])){
			if($_SERVER["REQUEST_URI"]=='/'){
				$page = 'main';
			}
			else{
				$page = substr($_SERVER["REQUEST_URI"], 1);
				if(!preg_match("/^[A-Za-z0-9-\/]{2,100}/", $page)){page404();}
			}
			return $page;
		}
	}
	public function run(){
		$uri = $this->getURI();
		$page404 = false;

		foreach ($this->routes as $page => $path){
			if(preg_match("~$page~", $uri)){
				$route = preg_replace("~$page~", $path, $uri);
				$segments = explode('/', $route);
				$controllerName = ucfirst(array_shift($segments)).'Controller';
				$actionName = 'action'.ucfirst(array_shift($segments));
				$parameters = $segments;

				if(file_exists(DIRNAME.'controller/'.$controllerName.'.php')){
					require_once(DIRNAME.'controller/'.$controllerName.'.php');
				}

				$obj = new $controllerName;
				$result = call_user_func_array(array($obj,$actionName), $parameters);

				if($result){
					$page404 = true;
					break;
				}

			}
		}

		if(!$page404){
			page404();
		}
	}
}
?>