<?php


namespace App\Controller;

use App\Model\DonModel;
use Core\Model\DbInterface;
use App\Model\AnimalModel;
use App\Model\ProductModel;
use Core\Controller\Controller;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->AnimalModel = new AnimalModel();

        $this->ProductModel = new ProductModel();

        $this->DonModel = new DonModel();

        $this->dbInterface = new DbInterface();

    }

    public function homeProject(){

        $product = $this->ProductModel->findAll();
        $animal = $this->AnimalModel->findAll();

        return $this->render("indexProjectView", [
            'product' => $product,'animal' => $animal
        ]);
    }

}
