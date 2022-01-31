<?php

namespace src\Router;

use BulveyzRouter\Route;

require_once(__DIR__ . "/../Controllers/PeopleController.php");

use src\Controllers\PeopleController;

define("ROOT", "http://localhost/test/");

Route::get('/test', function () {
    $people = new PeopleController();
    $people->index();
});

Route::get('test/contact/{id}', function ($param) {
    $people = new PeopleController();
    $people->conctat($param->id);
});
