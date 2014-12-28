<?php

namespace Davyb\DashBoardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Davyb\DashBoardBundle\Entity\Profil;
use Davyb\DashBoardBundle\Form\ProfilType;
use Davyb\DashBoardBundle\Entity\Adresse;
use Davyb\DashBoardBundle\Entity\Telephone;

class ProfilController extends Controller
{
	public function editProfilAction(Request $request)
	{
		//rcupration de l'utilisateur
		$user = $this->getUser();
		
		if (null === $user) {
			// Ici, l'utilisateur est anonyme ou l'URL n'est pas derrire un pare-feu
		} 
		
		else {
			
			$test = $user->getId();
		}
		
		$profil = new Profil();

		$form = $this->createForm(new ProfilType(), $profil);
		
		//si le formulaire est valide
		if ($form->handleRequest($request)->isValid()) {
			
      		$em = $this->getDoctrine()->getManager();
     		$em->persist($profil);
      		$em->flush();

      		$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistre.');

      		//return $this->redirect($this->generateUrl('oc_platform_view', array('id' => $advert->getId())));
    	}

    	return $this->render('DashBoardBundle:Default:index.html.twig', array(
    						'page' => 'profil_edit',
      						'form' => $form->createView(),
    						'test' => $test
    	));
	}
}