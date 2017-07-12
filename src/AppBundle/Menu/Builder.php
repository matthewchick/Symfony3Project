<?php
/**
 * Created by PhpStorm.
 * User: matthewchick
 * Date: 11/7/2017
 * Time: 9:28 PM
 * https://symfony.com/doc/current/bundles/KnpMenuBundle/index.html
 * step1: download the Bundle => composer require knplabs/knp-menu-bundle
 * step2: Enable the Bundle => add new Knp\Bundle\MenuBundle\KnpMenuBundle(), in the app/AppKernel.php
 * step3: Optional Configure the bundle => inside app/config/config.yml
 */

namespace AppBundle\Menu;


use Knp\Menu\MenuFactory;

class Builder
{
    public function mainMenu(MenuFactory $factory, array $options)
    {
        $menu = $factory->createItem('root');
        // Every children of root will have this attribute set, put Home close to Symfony
        $menu -> setChildrenAttribute('class', 'nav navbar-nav');
        $menu->addChild('Home', ['route' => 'homepage']);
        $menu->addChild('Offer', ['route' => 'offer']);
        return $menu;
    }
}