<?php 
return array(

	'admin/panel/task/deactive/([0-9]+)' => 'adminTask/deactive/$1',
	'admin/panel/task/active/([0-9]+)' => 'adminTask/active/$1',

	'admin/panel/task/update/([0-9]+)' => 'adminTask/update/$1',
	'admin/panel' => 'admin/panel',
	'admin' => 'admin/login',



	'sorting/([A-Za-z0-9-]+)/page-([0-9]+)' => 'main/index/all/$1/$2',
	'sorting/([A-Za-z0-9-]+)' => 'main/index/all/$1', //sorting for all name
	'addtask' => 'main/addtask',
	'page-([0-9]+)' => 'main/index/all/default/$1',
	'main' => 'main/index/all',
)
?>
