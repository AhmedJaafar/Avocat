<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontBundle\Entity\Competence;
use FrontBundle\Form\CompetenceType;
use Symfony\Component\HttpFoundation\Request;


class CompetenceController extends Controller
{
    public function competenceAction(Request $request)
    {

    	$competence = new Competence();
        $form = $this->createForm(CompetenceType::class, $competence);
        $form->handleRequest($request);
        
         if ($form->isSubmitted() && $form->isValid()) {

            $competence->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($competence);
            $em->flush();

            return $this->redirect($this->generateUrl('fos_user_registration_confirmed'));
        }

        return $this->render('FrontBundle:Competence:Competence.html.twig', array(
            'form' => $form->createView()) 
        );
    }


    public function updateAction($id,Request $request){
        $em = $this->getDoctrine()->getManager();
        $competence = $em->getRepository('FrontBundle:Competence')->find($id);
        
        $form = $this->createForm(CompetenceType::class, $competence);
        $form->handleRequest($request);


        
        if (!$competence) {
        throw $this->createNotFoundException(
            'No competence found for id '.$id
        );
       }
   
       if ($form->isSubmitted() && $form->isValid()){
       $em->flush();
       return $this->redirectToRoute('front_competence');
       }

       return $this->render('FrontBundle:Competence:Update.html.twig', array(
            'form' => $form->createView()) 
        );

    }

    

}
