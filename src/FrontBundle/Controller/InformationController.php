<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontBundle\Entity\Information;
use FrontBundle\Form\InformationType;
use Symfony\Component\HttpFoundation\Request;


class InformationController extends Controller
{
    public function informationAction(Request $request)
    {

    	$information = new Information();
        $form = $this->createForm(InformationType::class, $information);
        $form->handleRequest($request);
        
         if ($form->isSubmitted() && $form->isValid()) {

            $information->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($information);
            $em->flush();

            return $this->redirect($this->generateUrl('fos_user_registration_confirmed'));
        }

        return $this->render('FrontBundle:Information:Information.html.twig', array(
            'form' => $form->createView()) 
        );
    }


    
    

}
