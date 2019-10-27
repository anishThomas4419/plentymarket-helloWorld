<?php

namespace HelloWorld\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function sayHello(Twig $twig):string
    {
        return $twig->render('plentymarket-helloWorld::plentymarket-helloWorld/src/Controller/ContentController.php');
    }
}
