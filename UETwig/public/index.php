<?php
require_once "../vendor/autoload.php";

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Theodorius\UeTwig\Model\Hotel;

$hotels = [
    new Hotel("The Bellagio", "A luxurious 5-star hotel with a view of the sea..","bellagio.png"),
    new Hotel( "The Venetian Resort", " A luxurious all-suite hotel with a stunning replica of Venice, complete with gondola rides, upscale dining, and a massive casino.","venetia.png"),
    new Hotel("Wynn Las Vegas", "Known for its elegant design, high-end restaurants, world-class spa, and a top-tier casino experience.","wynn.png"),
    new Hotel("The Bellagio", "A luxurious 5-star hotel with a view of the sea..","bellagio.png"),
    new Hotel("The Bellagio", "A luxurious 5-star hotel with a view of the sea..","bellagio.png"),
];

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

try {
    echo $twig->render('mainTemplate.html.twig', ['hotels' => $hotels]);
    echo $twig->render('secondaryTemplate.html.twig', ['hotels' => $hotels]);
} catch (\Twig\Error\LoaderError|\Twig\Error\RuntimeError|\Twig\Error\SyntaxError $e) {
    echo $e;
}

