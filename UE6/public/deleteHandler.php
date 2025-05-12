<?php
require_once "../vendor/autoload.php";

use Theodorius\Ue6\Model\Repository\GameRepository;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Theodorius\Ue6\Model\Entity\Game;
use Theodorius\Ue6\Model\Entity\Player;

$gameRepository = new GameRepository('pdo-sqlite:///../db/mydb.sqlite');


if(isset($_POST["id"])){

    echo $gameRepository->delete(['id' => $_POST["id"]]) ;
    echo '<br> <a href="index.php" >Back to Mainpage</a>';



}

