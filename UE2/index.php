    <?php
    require "./OST.php";
    header("Content-Type: application/json");

    $seeder = new Seeder();
    $a = $seeder->run();
    if (isset($_GET["id"])) {
        echo json_encode($a[$_GET["id"]-1], JSON_PRETTY_PRINT);
    }
    else{
        echo json_encode($a, JSON_PRETTY_PRINT);
    }
