<?php
namespace Daw2\PhpQr;
require "./QrBuilder.php";

$myqr = new QrBuilder($_POST['txtUrl'],300,$_POST['txtQrLabel']);
$result = $myqr->build();

header('Content-Type: '.$result->getMimeType());
echo $result->getString();
$result->saveToFile(__DIR__."/img/".$_POST['txtFileName'].".png");