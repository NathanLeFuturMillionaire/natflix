<?php

// Crée un namespace
namespace App\controllers\Views;

use App\Libs\DatabaseConnection;
use App\Model\HomeRepository;

require_once("src/models/HomeRepository.php");
require_once("src/libs/DatabaseConnection.php");

class ViewsController {
  /**
   * Affiche la page d'accueil du site
   */
  public function displayHomePage()
  {
    $homeRepository = new HomeRepository;
    $homeRepository->connection = new DatabaseConnection;
    $products = $homeRepository->getProducts();
    require("views/homepage.php");
  }
}