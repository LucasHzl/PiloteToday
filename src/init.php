<?php

require_once __DIR__."/config.php";



function classLoader($className)
{
    $filePathClass = $className . '.php';

    $folderPathClasses = __DIR__ . '/Classes/';
    $folderPathModels = __DIR__ . '/Models/';
    $folderPathRepositories = __DIR__ . '/Repositories/';
    $folderPathControllers = __DIR__ . '/Controllers/';
    $folderPathServices = __DIR__ . '/Services/';

    if (file_exists($folderPathClasses . $filePathClass)) {
        require $folderPathClasses . $filePathClass;
    }

    if (file_exists($folderPathModels . $filePathClass)) {
        require $folderPathModels . $filePathClass;
    }

    if (file_exists($folderPathRepositories . $filePathClass)) {
        require $folderPathRepositories . $filePathClass;
    }

    if (file_exists($folderPathControllers . $filePathClass)) {
        require $folderPathControllers . $filePathClass;
    }

    if (file_exists($folderPathServices . $filePathClass)) {
        require $folderPathServices . $filePathClass;
    }
}

spl_autoload_register('classLoader');

session_start();

$database = new Database();

$database->getDb();

require_once __DIR__."/router.php";