<?php

function homepage_action($smarty) {
    $articles = get_articles();
    $smarty->assign('articles' ,$articles);

    $smarty->display('header.tpl');
    $smarty->display('home.tpl');
    $smarty->display('footer.tpl');
}

function page_not_found_action($smarty) {

    $smarty->display('notfound.tpl');
}

function contact_action($smarty) {

    $smarty->display('header.tpl');
    $smarty->display('contact.tpl');
    $smarty->display('footer.tpl');
}

function news_action() {
    global $smarty;
    global $pageno;

    $articles = get_some_articles();
    $number_of_pages = get_number_of_pages();
    $smarty->assign('current_page',$pageno);
    $smarty->assign('number_of_pages', $number_of_pages);
    $smarty->assign('articles' ,$articles);

    $smarty->display('header.tpl');
    $smarty->display('news.tpl');
    $smarty->display('footer.tpl');
}

function about_action($smarty) {

    $smarty->display('about.tpl');
}