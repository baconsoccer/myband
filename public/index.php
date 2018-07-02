<?php

require ('../private/smarty/Smarty.class.php');
require ('../private/model.php');
require ('../private/controller.php');

$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/view');

define('ARTICLES_PER_PAGE',5);


$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pageno = isset($_GET['pageno']) ? $_GET['pageno']: '1';

switch ($page) {
    case 'home': homepage_action($smarty); break;
    case 'news': news_action($smarty); break;
    case 'about' : about_action($smarty); break;
    case 'contact': contact_action($smarty); break;
    default: page_not_found_action($smarty); break;

}
?>

