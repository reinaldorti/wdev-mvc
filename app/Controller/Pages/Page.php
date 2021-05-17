<?php

namespace App\Controller\Pages;

use App\Utils\View;

/**
 * Class Page
 * @package App\Controller\Pages
 */
class Page
{

    /**
     * Métado responsável por renderezar o topo da página
     * @return string
     */
    private static function getHeader(){
        return View::render('pages/header');

    }

    /**
     * Métado responsável por renderezar o rodapé da página
     * @return string
     */
    private static function getFooter(){
        return View::render('pages/footer');

    }

    /**
     * Método responsáel por retornar o conteúdo (view) da nossa página genérica
     * @param $title
     * @param $content
     * @return string
     */
    public static function getPage($title, $content)
    {
        return View::render('pages/page',[
            'title' => $title,
            'header' => self::getHeader(),
            'footer' => self::getFooter(),
            'content' => $content
        ]);
    }
}