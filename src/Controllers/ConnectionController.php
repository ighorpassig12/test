<?php

namespace src\Controllers;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class ConnectionController
{

    public function database()
    {

        require_once __DIR__ . "/../../vendor/autoload.php";

        $isDevMode = true;
        $proxyDir = null;
        $cache = null;
        $useSimpleAnnotationReader = false;
        $config = Setup::createAnnotationMetadataConfiguration(array("\\Models"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
        $config->addEntityNamespace('', 'Models');


        $conn = array(
            'dbname' => 'mvc',
            'user' => 'root',
            'password' => 'root',
            'host' => '127.0.0.1',
            'driver' => 'pdo_mysql',
        );

        return EntityManager::create($conn, $config);
    }
}
