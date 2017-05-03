<?php
//если загружаем конфигурацию с учетом секций:

	//если сервер "deploy"
//$link_db = new mysqli($app['config']['database']['host'],
//$app['config']['database']['user'],
//$app['config']['database']['password'],
//$app['config']['database']['base']);

	//если сервер локальный, для отладки ("production", "dev(elopment)")
$link_db = new mysqli($app['config']['local_database']['host'],
$app['config']['local_database']['user'],
$app['config']['local_database']['password'],
$app['config']['local_database']['base']);

//если/когда загружаем(ли) конфигурацию без учета секций (можно и 2DEL):
/*$link_db = new mysqli($app['config']['host'],
$app['config']['user'],
$app['config']['password'],
$app['config']['base']);*/

$link_db->query("SET NAMES utf8");

function sqlquery($query) {
	global $link_db;
	$result=$link_db->query($query);
	if ($result) {
		if (!is_object($result)) {
			return $link_db->insert_id;
		}
		$data=array();
		while ($ROW = $result->fetch_assoc()) {
			$data[]=$ROW;
		}
		return $data;
	}
	else {
		return false;
	}
}

/*Class db_ {
    var  $link_db;
    
    function connect($conf_db)
    {
        $this->link_db = new mysqli($conf_db[0], $conf_db[1], $conf_db[2], $conf_db[3]);
        $this->link_db->query("SET NAMES utf8");
    }
	function query($query)
	{
	   	if ($result = $this->link_db->query($query))
		{
		 
			if (!is_object($result))
			{
				return $this->link_db->insert_id;
			}
			$data = array();
			while ($row = $result->fetch_assoc())
			{
				$data[] = $row;
			}
            return $data;
		}
		return false;
	}
}

$db= new db_;
$conf_db = array($config["database"]["host"],$config["database"]["username"],$config["database"]["password"],$config["database"]["name"]);
$db->connect($conf_db);
*/
?>