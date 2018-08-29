<?php
/**
* VAA
* reads questions from json.
*/
session_start();
require '../vendor/autoload.php';

//include("../setup.php");
require 'texts.php';
require 'common.php';

// put full path to Smarty.class.php
// require('../../../usr/lib/php/Smarty-3.1.19/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../templates/'.$text['election_code']);
$smarty->setCompileDir('../templates_c');

//read questions
$qfile = 'questions.json';
$questions = json_decode(file_get_contents($qfile));

//get prefilled user's values, if exist
$user = json_encode(get_user_values());

$smarty->assign('text', $text);
$smarty->assign('user', $user);
$smarty->assignByRef('questions', $questions);
$smarty->assign('session_id', session_id());
$smarty->display('page.tpl');
