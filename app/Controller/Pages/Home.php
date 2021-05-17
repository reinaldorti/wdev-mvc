<?php

namespace App\Controller\Pages;

use App\Model\Entity\Organization;
use App\Utils\View;

/**
 * Class Home
 * @package App\Controller\Pages
 */
class Home extends Page
{
    /**
     * Método responsáel por retornar o conteúdo (view) da nossa home
     * @return string
     */
    public static function getHome()
    {
        //ORGANIZAÇÃO
        $obOrganization = new Organization();

        //VIEW DA HOME
        $content = View::render('pages/home', [
            'name'          => $obOrganization->name,
            'description'   => $obOrganization->description,
            'site'          => $obOrganization->site
        ]);

        //RETORNA A VIEW DA PÁGINA
        return parent::getPage('WDEV - Canal - Home', $content);
    }
}