<?php


namespace App\Controller\Pages;


use App\Utils\View;

/**
 * Class Home
 * @package App\Controller\Pages
 */
class Home
{
    /**
     * Método responsáel por retornar o conteúdo (view) da nossa home
     * @return string
     */
    public static function getHome()
    {
        return View::render('pages/home');
    }

}