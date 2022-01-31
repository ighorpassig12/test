<?php
//Importar o autoload
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\DisconnectedClassMetadataFactory;
use Doctrine\ORM\Tools\Export\ClassMetadataExporter;
use Doctrine\ORM\Tools\EntityGenerator;
use Doctrine\ORM\Mapping\Driver\DatabaseDriver;

$config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), true);

//Dados do Banco de dados
$connection = array(
    'dbname' => 'mvc',
    'user' => 'root',
    'password' => 'root',
    'host' => '127.0.0.1',
    'driver' => 'pdo_mysql',
);

$entityManager = \Doctrine\ORM\EntityManager::create($connection, $config);

$driver = new DatabaseDriver($entityManager->getConnection()->getSchemaManager());

$driver->setNamespace('Models\\');
$entityManager->getConfiguration()->setMetadataDriverImpl($driver);


$classMetaData = new DisconnectedClassMetadataFactory();
$classMetaData->setEntityManager($entityManager);
$metadata = $classMetaData->getAllMetadata();

$exporter = (new ClassMetadataExporter())->getExporter('annotation', 'src');
$exporter->setEntityGenerator(new EntityGenerator());
$exporter->setMetadata($metadata);

$exporter->export();
