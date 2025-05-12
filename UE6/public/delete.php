<?php
require_once "../vendor/autoload.php";


use Theodorius\Ue6\Model\Repository\GameRepository;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Theodorius\Ue6\Model\Entity\Game;
use Theodorius\Ue6\Model\Entity\Player;
$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);
$gameRepository = new GameRepository('pdo-sqlite:///../db/mydb.sqlite');

try {
    echo $twig->render('deleteWrapperTemplate.html.twig',['games' => $gameRepository->findAll()]);
} catch (\Twig\Error\LoaderError|\Twig\Error\RuntimeError|\Twig\Error\SyntaxError $e) {
    echo $e;
}