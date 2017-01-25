<?php
/**
 * Created by PhpStorm.
 * User: pmdc
 * Date: 16/01/17
 * Time: 2:11 PM
 */

namespace Viweb\ContactBundle\EventListener;


use Viweb\SystemBundle\Event\ConfigureAdminMenuEvent;

class ConfigureAdminMenuListener
{
    public function onMenuConfigure(ConfigureAdminMenuEvent $event)
    {
        $menu = $event->getMenu();
        $menu->addChild('Contact', ['route' => 'viweb_admin_contact_index']);

    }

}