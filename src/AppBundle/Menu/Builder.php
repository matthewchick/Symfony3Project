<?php
/**
 * Created by PhpStorm.
 * User: matthewchick
 * Date: 11/7/2017
 * Time: 9:28 PM
 */

namespace AppBundle\Menu;


use Knp\Menu\MenuFactory;

class Builder
{
    public function mainMenu(MenuFactory $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->addChild('Home', ['route' => 'homepage']);
        return $menu;
    }
}