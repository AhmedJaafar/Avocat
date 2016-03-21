<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontBundle\Entity\Langue;
use FrontBundle\Form\LangueType;
use Symfony\Component\HttpFoundation\Request;

class LangueController extends Controller
{
   


    public function langueAction(Request $request)
    {
    	

        $langue = new Langue();
        $form = $this->createForm(LangueType::class, $langue);
        $form->handleRequest($request);
        
         if ($form->isSubmitted() && $form->isValid()) {

            $langue->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($langue);
            $em->flush();

            return $this->redirect($this->generateUrl('fos_user_registration_confirmed'));
        }

        return $this->render('FrontBundle:Langue:Langue.html.twig', array(
            'form' => $form->createView()) 
        );

    }
}
