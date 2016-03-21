<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FrontBundle\Entity\Photo;
use AppBundle\Entity\User;



class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }


    public function deleteAction($id){
    

    $em = $this->getDoctrine()->getEntityManager();
    $user = $em->getRepository('AppBundle:User')->find($id);
    $photo = $em->getRepository('FrontBundle:Photo')->findOneByUser($id);
    
    if (!$user) {
    throw $this->createNotFoundException('No user found');
    }

    if ($photo) {
    $em->remove($photo);
    }
    $em->remove($user);
    $em->flush();

    return $this->redirect($this->generateUrl('front_photodeprofile'));
    }
}
