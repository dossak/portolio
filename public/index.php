<?php
require __DIR__.'/../vendor/autoload.php';

use App\Controller\PortfolioController;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader(__DIR__.'/../templates');
$twig = new Environment($loader);

$controller = new PortfolioController($twig);
echo $controller->index();
