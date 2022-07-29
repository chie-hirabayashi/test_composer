<?php
// ライブラリ読込
require '../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet;


// use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xls as XlsReader;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as Reader;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
// use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;


// [test11.xlsx] ファイルをロードしSpreadsheetオブジェクト作成
$objSpreadsheet = IOFactory::load('./test11.xlsx');

// ワークシートオブジェクトの取得
$objSheet = $objSpreadsheet->getSheet(0);

// ワークシート内の最大領域座標（"A1:XXXnnn" XXX:最大カラム文字列, nnn:最大行）
$strRange = $objSheet->calculateWorksheetDimension();

// ワークシートの全てのデータ取得（配列データとして）
$arrData = $objSheet->rangeToArray($strRange);

echo '<pre>';
print_r($arrData);
echo '</pre>';
?>
