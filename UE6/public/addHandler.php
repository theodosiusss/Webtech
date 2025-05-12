<?php

use Theodorius\Ue6\Model\Repository\GameRepository;

require_once "../vendor/autoload.php";

if (isset($_POST["player1Name"], $_POST["player2Name"], $_POST["player1Pick"], $_POST["player2Pick"], $_POST["date"])) {

    $format = 'Y-m-d H:i:s';

    $gameRepository = new GameRepository('pdo-sqlite:///../db/mydb.sqlite');


    $date = str_replace("T", " ", $_POST["date"]);
    $date = $date . ":00";

    if(($_POST["player1Pick"] == "Rock" || $_POST["player1Pick"] == "Paper" || $_POST["player1Pick"] == "Scissors")
        &&
        ($_POST["player2Pick"] == "Rock" || $_POST["player2Pick"] == "Paper" || $_POST["player2Pick"] == "Scissors"))
    {
        echo $gameRepository->add($_POST["player1Name"], $_POST["player2Name"], $_POST["player1Pick"], $_POST["player2Pick"], $date);
        echo '<br> <a href="index.php" > Back to Mainpage</a>';


    }
    else{
        echo "Pick has to be Rock Paper or Scissors";

    }




} else {
    echo "missing fields";

}