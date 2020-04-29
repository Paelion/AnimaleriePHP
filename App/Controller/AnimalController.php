<?php

namespace App\Controller;


use Core\Model\DbInterface;
use App\Model\AnimalModel;
use Core\Controller\Controller;

class AnimalController extends Controller
{

    public function __construct()
    {
        $this->AnimalModel = new AnimalModel();

        $this->dbInterface = new DbInterface();

    }

    public function homeAnimal()
    {
        $animals = $this->AnimalModel->findAll();
        return $this->render("animal/indexView", [
            'animals' => $animals,
        ]);
    }

    public function newAnimal()
    {

        if (!empty($_POST)) {
            $animal = array_splice($_POST, 0, 6);
            $options = $_POST["options"];

            $this->dbInterface->save($animal, 'animal');
            $animalId = $this->AnimalModel->findOneBy(["nom" => $animal["nom"]]);
            $animalId = $animalId->id;

            foreach ($options as $option) {
                $this->dbInterface->save(["option_id" => $option, "animal_id" => $animalId], 'optionsAnimal');
            }
            return $this->redirectToRoute('homeAnimal');

        }

        return $this->render("animal/newView");
    }


    public function single()
    {
        $animal = $this->AnimalModel->find($_GET["id"]);
        return $this->render("animal/singleView", ['animal' => $animal]);
    }

    public function modify()
    {
        if (!empty($_POST)) {
            $this->dbInterface->update('animal', $_POST, $_GET["id"]);
            return $this->redirectToRoute('singleAnimal', $_GET["id"]);
        }
        $animal = $this->AnimalModel->find($_GET["id"]);
        return $this->render("animal/modifyView", ['animal' => $animal]);
    }

    public function delete()
    {

        return $this->redirectToRoute('homeAnimal');
    }

    public function reservation (){

        $animal = $this->AnimalModel->find($_GET["id"]);
        return $this->render("reservation/reservationView", ['animal' => $animal]);


        return $this->render("user/signup", ["message" => $message]);
    }

    public function reservationDate (){

        return $this->render("reservation/reservationIndex");
    }
}
