<?php
$template = file_get_contents("../src/templates/index.html");

$hotels = [
    [
        "name" => "The Bellagio",
        "description" => "A luxurious 5-star hotel with a view of the sea..",
        "image" => "bellagio.png"
    ],
    [
        "name" => "The Venetian Resort",
        "description" => " A luxurious all-suite hotel with a stunning replica of Venice, complete with gondola rides, upscale dining, and a massive casino.",
        "image" => "venetia.png"
    ],
    [
        "name" => "Wynn Las Vegas",
        "description" => "Known for its elegant design, high-end restaurants, world-class spa, and a top-tier casino experience.",
        "image" => "wynn.png"
    ],
   




];


$hotelHtml ="";

foreach ($hotels as $hotel){
    $templatePartial = file_get_contents("../src/templates/hotel.html");
    $render = str_replace("{{HotelName}}", $hotel["name"],$templatePartial);
    $render = str_replace("{{HotelDescription}}", $hotel["description"],$render);
    $render = str_replace("{{HotelImagePath}}", $hotel["image"],$render);

    $hotelHtml .= $render;


}
$replacedTemp = str_replace("{{Hotel_LOOP}}", $hotelHtml, $template);
echo $replacedTemp;