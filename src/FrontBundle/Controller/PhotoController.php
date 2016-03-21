<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontBundle\Entity\Photo;
use FrontBundle\Form\PhotoType;
use Symfony\Component\HttpFoundation\Request;



class PhotoController extends Controller
{
    public function photoAction(Request $request)
    {
    	$photo = new Photo();
        $form = $this->createForm(PhotoType::class, $photo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            

            $file = $photo->getName();

            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/photo';
            $file->move($brochuresDir, $fileName);

            $photo->setName($fileName);

            $photo->setUser($this->getUser());

            $em = $this->getDoctrine()->getManager();
            $em->persist($photo);

            $em->flush();




            return $this->redirect($this->generateUrl('fos_user_registration_confirmed'));
        }

        return $this->render('FrontBundle:Photo:Photo.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    
}
