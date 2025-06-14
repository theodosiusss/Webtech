    <?php


    require_once "../vendor/autoload.php";

    use Theodorius\Ue6\Model\Repository\GameRepository;
    use Twig\Environment;
    use Twig\Loader\FilesystemLoader;
    use Theodorius\Ue6\Model\Entity\Game;
    use Theodorius\Ue6\Model\Entity\Player;

    $gameRepository = new GameRepository('pdo-sqlite:///../db/mydb.sqlite');


    // Post functionalities
    if (isset($_POST["player1Name"], $_POST["player2Name"], $_POST["player1Pick"], $_POST["player2Pick"], $_POST["date"])) {

        $date = str_replace("T", " ", $_POST["date"]);
        $date = $date . ":00";

        if (($_POST["player1Pick"] == "Rock" || $_POST["player1Pick"] == "Paper" || $_POST["player1Pick"] == "Scissors")
            &&
            ($_POST["player2Pick"] == "Rock" || $_POST["player2Pick"] == "Paper" || $_POST["player2Pick"] == "Scissors")) {
            echo '<script>alert(' . var_export($gameRepository->add($_POST["player1Name"], $_POST["player2Name"], $_POST["player1Pick"], $_POST["player2Pick"], $date), true) . ')</script>';



        } else {
            echo "Pick has to be Rock Paper or Scissors";

        }


    }


    if (isset($_POST["id"])) {

        echo '<script>alert(' . var_export($gameRepository->delete(['id' => $_POST["id"]]), true) . ')</script>';


    }

    //Post Functionalities end


    $page = $_GET['page'] ?? "home" ;
    $allowed_pages = ['home', 'add', 'delete'];



    $loader = new FilesystemLoader('../templates');
    $twig = new Environment($loader);
    if (in_array($page, $allowed_pages)){

        if($page === "home") {
            try {
                echo $twig->render('mainTemplate.html.twig', ['games' => $gameRepository->findAll()]);
            } catch (\Twig\Error\LoaderError|\Twig\Error\RuntimeError|\Twig\Error\SyntaxError $e) {
                echo $e;
            }
        }
        if($page === "add") {
            try {
                echo $twig->render('addTemplate.html.twig');
            } catch (\Twig\Error\LoaderError|\Twig\Error\RuntimeError|\Twig\Error\SyntaxError $e) {
                echo $e;
            }
        }
        if($page === "delete") {
            try {
                echo $twig->render('deleteWrapperTemplate.html.twig',['games' => $gameRepository->findAll()]);
            } catch (\Twig\Error\LoaderError|\Twig\Error\RuntimeError|\Twig\Error\SyntaxError $e) {
                echo $e;
            }
        }


    }else {
        echo "zurück";
    }

