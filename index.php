<?php

use  App\Controllers\Views\ViewsController;

require("src/controllers/ViewsController.php");

try {

  if (isset($_GET["page"]) && $_GET["page"] !== "") {

  } else {
    $homepage = new ViewsController;
    $homepage->displayHomePage();
  }

} catch (Exception $e) {
  $errorMessage = $e->getMessage();
  require("templates/errors.php");
}