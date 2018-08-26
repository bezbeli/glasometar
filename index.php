<?php
/**
* VAA
* reads questions from json.
*/
session_start();
require 'vendor/autoload.php';
require '2018/texts.php';
require '2018/common.php';

// put full path to Smarty.class.php
$smarty = new Smarty();

$smarty->setTemplateDir('templates/'.$text['election_code']);
$smarty->setCompileDir('templates_c');

//partners
$partnercss = 'css/default.css';

$smarty->assign('text', $text);
$smarty->assign('partnercss', $partnercss);
$smarty->assign('session_id', session_id());
$smarty->display('front.tpl');
