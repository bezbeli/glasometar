<?php
/**
* VAA
*/

session_start();
require '../vendor/autoload.php';
require '../2018/texts.php';

$smarty = new Smarty();

$smarty->setTemplateDir('../templates/'.$text['election_code']);
$smarty->setCompileDir('../templates_c');

$smarty->assign('text', $text);
$smarty->assign('partnercss', 'default.css');
$smarty->display('page-kontakt.tpl');
