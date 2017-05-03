<?php
    $app = array();
    //если загружаем конфигурацию без учета секций:
    //$app['config'] = parse_ini_file ("config/config.ini.php");
    //если загружаем конфигурацию с учетом секций:
    $app['config'] = parse_ini_file ("config/config.ini.php", true);
?>