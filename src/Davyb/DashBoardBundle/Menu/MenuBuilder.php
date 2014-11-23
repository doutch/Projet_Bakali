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
		
		//cours
		/*$cours = "Nos cours";
		
		$menu->addChild($cours, array('uri' => '#'));
		
		$menu[$cours]->addChild("3 - 6 ans", array('route' => 'cours1','routeParameters' => array('type_cours' => "1")));
		$menu[$cours]->addChild("6 - 8 ans", array('route' => 'cours2','routeParameters' => array('type_cours' => "2")));
		$menu[$cours]->addChild("8 - 11 ans", array('route' => 'cours3','routeParameters' => array('type_cours' => "3")));
		
		
		//lien horaires
		$menu->addChild('Planning', array('route' => 'horaires'));
		
		//lien qui somme nous
		$menu->addChild('Qui suis je?', array('route' => 'whois'));
		
		//lien contact
		$menu->addChild('Contact', array('route' => 'contact'));*/
	
		return $menu;
	}
}