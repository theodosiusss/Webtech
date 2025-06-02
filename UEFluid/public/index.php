    <?php


    require_once "../vendor/autoload.php";


    use Theodorius\Ue6\Model\Entity\Game;
    use Theodorius\Ue6\Model\Entity\Player;
    use Theodorius\UeFluid\Model\Repository\GameRepository;
    use TYPO3Fluid\Fluid\View\TemplateView;

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



    $view = new TemplateView();
    $view->getRenderingContext()->getTemplatePaths()->setTemplateRootPaths(['../templates/templates/']);
    $view->getRenderingContext()->getTemplatePaths()->setLayoutRootPaths(['../templates/layouts/']);
    $view->getRenderingContext()->getTemplatePaths()->setPartialRootPaths(['../templates/partials/']);


    if (in_array($page, $allowed_pages)){

        if($page === "home") {
            try {
                $view->assign("games",$gameRepository->findAll());
               echo $view->render('Main',);
            } catch (exception $e) {
                echo $e;
            }
        }
        if($page === "add") {
            try {
               echo $view->render('Add',);
            } catch (exception $e) {
                echo $e;
            }
        }
        if($page === "delete") {
            try {
                $view->assign("games",$gameRepository->findAll());
                echo $view->render('DeleteWrapper',);
            } catch (exception $e) {
                echo $e;
            }
        }


    }else {
        echo "zurück";
    }

