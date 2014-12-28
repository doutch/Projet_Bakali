<?php

namespace Davyb\DashBoardBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;



class MenuBuilder extends ContainerAware
{
	private $factory;
	private $em;
	
	
	
	public function mainMenu(FactoryInterface $factory, array $options)
	{
		 
		//conception du menu
		$menu = $factory->createItem('root');
		$menu->setChildrenAttributes(array('class' => 'sidebar-menu','id' => 'nav-accordion'));
		
		//lien accueil tableau de bord
		$menu->addChild('Mon tableau de bord', array('route' => 'dashboard_homepage'))
			 ->setAttribute('icon', 'fa fa-home');
		
		//lien profil
		$menu->addChild('Mon profil', array('route' => 'dashboard_profil'))
		->setAttribute('icon', 'fa fa-user');
	
		return $menu;
	}
}