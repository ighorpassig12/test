<?php

namespace src\Controllers;

require_once __DIR__ . '/ConnectionController.php';


class PeopleController
{
    public function index()
    {

        $conn = new ConnectionController();
        $conn = $conn->database();

        require_once __DIR__ . "/../Models/Peoples.php";

        $query = $conn->getRepository(":Peoples")->findAll();

        $arrResult = array();
        foreach ($query as $positon => $element) {
            $result = (array) $element;
            foreach ($result as $key => $item) {
                $key = str_replace("Models\Peoples", "", $key);
                $arrResult[$positon][(string) $key] = $item;
            }
        }

        $view = $arrResult;
        require_once __DIR__ . '/../Views/peoples.blade.php';
    }

    public function conctat($id)
    {

        $conn = new ConnectionController();
        $conn = $conn->database();

        require_once __DIR__ . "/../Models/Peoples.php";
        require_once __DIR__ . "/../Models/PeoplesConctat.php";

        $query = $conn->getRepository(":PeoplesConctat")->findAll();
        $arrResult = array();
        foreach ($query as $positon => $element) {
            $result = (array) $element;
            foreach ($result as $key => $item) {
                $key = str_replace("Models\PeoplesConctat", "", $key);
                if (trim($key) != "idPeople") {
                    $arrResult[$positon][(string)$key] = $item;
                }
            }
        }
        $view = $arrResult;
        require_once __DIR__ . '/../Views/contact.blade.php';
    }
}
