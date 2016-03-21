<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{
   


    public function profileAction()
    {
    	$user = $this->getUser();
        return $this->render('FrontBundle:Profile:Profile.html.twig',array('user' => $user));

    }
}
