<?php

$smarty = new Smarty();

$smarty->setTemplateDir($basedir . '/templates/');
$smarty->setCompileDir($basedir . '/smartyfolders/templates_c/');
$smarty->setConfigDir($basedir . '/smartyfolders/configs/');
$smarty->setCacheDir($basedir . '/smartyfolders/cache/');

if (isset($langsAvailable)) {
  $smarty->assign('langsAvailable', $langsAvailable, true);
  $smarty->assign('langsLabels', $langsLabels);
  $smarty->assign('langCurrent', $langCurrent);
}

if (isset($_SESSION)) $smarty->assign('SESSION', $_SESSION);

//** un-comment the following line to show the debug console
//$smarty->debugging = true;
$smarty->force_compile = false;
//$smarty->display('index.tpl');
