<?php
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');

// шаблон
$template = 'default';

//пути к файлам шаблонов
define('TemplatePrefix', "../views/$template/");
define('TemplatePostfix', '.tpl');

//полный путь к файлам шаблонов www
define('TemplateWebPath', "/templates/$template/");

//Иннициализация шаблонизатора
require('../library/smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/smarty/lexer');

$smarty->assign('templateWebPath', TemplateWebPath);