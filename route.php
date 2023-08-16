<?php

require_once "vendor/autoload.php";

use App\classes\Controller\MyPortfolioController;

MyPortfolioController::router($_GET['page']);