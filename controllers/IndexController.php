<?php

function testAction(){
    echo 'IndexController.php > testAction';
}

function indexAction($smarty){
    $smarty->assign('pageTitle', 'Главная страница сайта');
    loadTemplate($smarty, 'index');
}
//access token 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
