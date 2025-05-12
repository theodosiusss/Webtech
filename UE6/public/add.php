<?php
require_once "../vendor/autoload.php";


use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Theodorius\Ue6\Model\Entity\Game;
use Theodorius\Ue6\Model\Entity\Player;
$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

try {
    echo $twig->render('addTemplate.html.twig');
} catch (\Twig\Error\LoaderError|\Twig\Error\RuntimeError|\Twig\Error\SyntaxError $e) {
    echo $e;
}