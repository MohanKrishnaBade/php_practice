<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require_once 'AutoLoading.php';
//include '/Applications/MAMP/htdocs/php_practice/PHPWord/src/PhpWord/PhpWord.php';

//$fileName = '/Applications/MAMP/htdocs/php_practice/mohan.html';
//
//$File = fopen($fileName, 'w+') or die("Unable to open file!");
//
//$data = '<!DOCTYPE html>
//<html>
//<head>
//</head>
//<body>
//<table style=\"border-collapse: collapse; width: 100%; height: 54px;\" border=\"1\"><tbody><tr style=\"height: 18px;\"><td style=\"width: 33.3333%; height: 18px;\">Column</td><td style=\"width: 33.3333%; height: 18px;\">Column</td><td style=\"width: 33.3333%; height: 18px;\">Column</td></tr><tr style=\"height: 18px;\"><td style=\"width: 33.3333%; height: 18px;\">ROW</td>
//<td style=\"width: 33.3333%; height: 18px;\">ROW</td><td style=\"width: 33.3333%; height: 18px;\">ROW</td></tr><tr style=\"height: 18px;\"><td style=\"width: 33.3333%; height: 18px;\">Row</td><td style=\"width: 33.3333%; height: 18px;\">ROW</td><td style=\"width: 33.3333%; height: 18px;\">ROW</td></tr></tbody></table>"
//</body>
//</html>
//';
////
////$Status = fwrite($File, $data);
////fclose($File);
//
//
//$pw = new \PhpOffice\PhpWord\PhpWord();
//
///* [THE HTML] */
//$section = $pw->addSection();
//
////header(Content)
//$html = $data;
//\PhpOffice\PhpWord\Shared\Html::addHtml($section, $html, false, false);
//$pw->save("/Applications/MAMP/htdocs/php_practice/mohan.docx", "Word2007");


//$string = "<w:tbl><w:tblGrid><w:gridCol/></w:tblGrid><w:tblPr><w:tblW w:w=\"5000\" w:type=\"pct\"/></w:tblPr><w:tr><w:trPr/><w:tc><w:tcPr/><w:p><w:pPr/><w:r><w:rPr><w:color w:val=\"orange\"/></w:rPr><w:t xml:space=\"preserve\">Firstname</w:t></w:r></w:p></w:tc></w:tr><w:tr><w:trPr/><w:tc><w:tcPr/><w:p><w:pPr/><w:r><w:rPr><w:color w:val=\"green\"/></w:rPr><w:t xml:space=\"preserve\">Peter</w:t></w:r></w:p></w:tc></w:tr></w:tbl>";
//echo  htmlspecialchars($string);

$file = file_get_contents('./helper/word/document.xml');

preg_match('#<w:body>(.+?)</w:body>#is', $file, $matches);

$data = $matches[1];

$xmlfile = file_get_contents('./docActions/word/document.xml');

$va = str_replace('$f1', $data, $xmlfile);

unlink('./docActions/word/document.xml');

$file = fopen('./docActions/word/document.xml', 'w');
$Status = fwrite($file, $va);
fclose($file);


