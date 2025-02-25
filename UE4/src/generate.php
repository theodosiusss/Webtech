<?php

require '../vendor/autoload.php';

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Exception\ValidationException;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

$regexTel = '/^\+?[0-9 ]{10,20}$/';


$comic = "Comic Sans MS";


if (isset($_POST["phoneNumber"])) {

    if (preg_match($regexTel, $_POST["phoneNumber"])) {
        try {
            generateQrCode($_POST["phoneNumber"]);
        } catch (ValidationException $e) {
        }
    }else{
        echo '<img src="../img.png" alt="Mein Bild" width="300px" height="180px" style="object-fit: cover;">
                <h1 style="color:red; font-family: Comic Sans MS,ui-serif ;">FALSCHERINPUT</h1>';
    }



}
/**
 * @throws ValidationException
 */
function generateQrCode($phoneNumber): void
{
    $builder = new Builder(
        writer: new PngWriter(),
        writerOptions: [],
        validateResult: false,
        data: 'tel:' . $phoneNumber,
        encoding: new Encoding('UTF-8'),
        errorCorrectionLevel: ErrorCorrectionLevel::High,
        size: 300,
        margin: 10,
        roundBlockSizeMode: RoundBlockSizeMode::Margin,
    );

    $result = $builder->build();
    header('Content-Type: ' . $result->getMimeType());
    echo $result->getString();
}

