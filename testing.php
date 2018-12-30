<?php

error_reporting(E_ALL);
ini_set('display_errors',1);
ini_set('error_reporting', E_ALL);
ini_set('display_startup_errors',1);
error_reporting(-1);

require_once 'phpoffice/phpword/src/PhpWord/TemplateProcessor.php';
require_once 'phpoffice/phpword/src/PhpWord/Writer/Word2007.php';

$template  =  new \PhpOffice\PhpWord\TemplateProcessor('./test.docx');

// create new writer
$objWriter = new PhpOffice\PhpWord\Writer\Word2007($phpWord);

// use new function to get $tables XML
$tableStr = $objWriter->getWriterPart('Document')->getTableAsText($table);

$template->setValue('f1', htmlspecialchars('<h1>mohan</h1>'));
$template->saveAs('./result122323.docx');