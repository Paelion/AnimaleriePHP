<?php

use App\Controller\AnimalController;
use App\Controller\ProductController;
use App\Controller\UserController;
use App\Controller\ProjectController;
use Model\DbInterface;
use Model\AnimalModel;


if ((isset($_GET["page"]) && $_GET["page"] == 'home') || !isset($_GET["page"])) {
    $controller = new ProjectController();
    $controller->homeProject();

} elseif ((isset($_GET["page"]) && $_GET["page"] == 'homeAnimal') || !isset($_GET["page"])) {
    $controller = new AnimalController();
    $controller->homeAnimal();

}elseif ((isset($_GET["page"]) && $_GET["page"] == 'homeProduct') || !isset($_GET["page"])) {
    $controller = new ProductController();
    $controller->homeProduct();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'newAnimal') {
    $controller = new AnimalController();
    $controller->newAnimal();

}elseif (isset($_GET["page"]) && $_GET["page"] == 'newProduct') {
    $controller = new ProductController();
    $controller->newProduct();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'singleAnimal') {
    $controller = new AnimalController();
    $controller->single();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'singleProduct') {
    $controller = new ProductController();
    $controller->singleProduct();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'modifyAnimal') {
    $controller = new AnimalController();
    $controller->modify();

}elseif (isset($_GET["page"]) && $_GET["page"] == 'modifyProduct') {
    $controller = new ProductController();
    $controller->modifyProduct();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'deleteAnimal') {
    $controller = new AnimalController();
    $controller->delete();

}elseif (isset($_GET["page"]) && $_GET["page"] == 'deleteProduct') {
    $controller = new ProductController();
    $controller->deleteProduct();

}elseif (isset($_GET["page"]) && $_GET["page"] == 'reservation') {
    $controller = new AnimalController();
    $controller->reservation();

}elseif (isset($_GET["page"]) && $_GET["page"] == 'reservationDate') {
    $controller = new AnimalController();
    $controller->reservationDate();
}



if ((isset($_GET["page"]) && $_GET["page"] == 'signup')) {
    $controller = new UserController();
    $controller->signup();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'login') {
    $controller = new UserController();
    $controller->login();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'logout') {
    $controller = new UserController();
    $controller->logout();

}
