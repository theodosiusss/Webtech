<?php


require_once "../vendor/autoload.php";

use Theodorius\Ue6\Model\Repository\GameRepository;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Theodorius\Ue6\Model\Entity\Game;
use Theodorius\Ue6\Model\Entity\Player;


$playerA = new Player("Alice", "Rock");
$playerB = new Player("Bob", "Scissors");
$playerC = new Player("Charlie", "Paper");
$playerD = new Player("Diana", "Rock");
$playerE = new Player("Eve", "Scissors");
$playerF = new Player("Frank", "Paper");

$gameRepository = new GameRepository('pdo-sqlite:///../db/mydb.sqlite');

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

try {
    echo $twig->render('mainTemplate.html.twig', ['games' => $gameRepository->findAll()]);
} catch (\Twig\Error\LoaderError|\Twig\Error\RuntimeError|\Twig\Error\SyntaxError $e) {
    echo $e;
}
