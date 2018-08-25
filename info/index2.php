<?php
/**
* VAA
* reads questions from json.
*/
session_start();
require '../2018/texts.php';
require '../vendor/autoload.php';

//include("../setup.php");

// put full path to Smarty.class.php
// require('../../../usr/lib/php/Smarty-3.1.19/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../smarty/templates/'.$text['election_code']);
$smarty->setCompileDir('../smarty/templates_c');

$smarty->assign('text', $text);
$smarty->display('page-info.tpl');
