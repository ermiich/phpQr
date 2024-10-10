<?php
namespace Daw2\PhpQr;
require '../../vendor/autoload.php';

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\LabelAlignment;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

class QrBuilder{
  private string $data;
  private int $qrSize;
  private string $labelText;

  public function __construct(string $data,int $qrSize,string $labelText) {
    $this->data = $data;
    $this->qrSize = $qrSize;
    $this->labelText = $labelText;
  }
  public function build(){
    $result = Builder::create()
    ->writer(new PngWriter())
    ->writerOptions([])
    ->data($this->data)
    ->encoding(new Encoding('UTF-8'))
    ->errorCorrectionLevel(ErrorCorrectionLevel::High)
    ->size(300)
    ->margin(10)
    ->roundBlockSizeMode(RoundBlockSizeMode::Margin)
    ->logoPath(__DIR__.'/assets/logo.png')
    ->logoResizeToWidth(25)
    ->logoPunchoutBackground(true)
    ->labelText($this->labelText)
    ->labelFont(new NotoSans(20))
    ->labelAlignment(LabelAlignment::Center)
    ->validateResult(false)
    ->build();

    return $result;
  }
}

  
    
    