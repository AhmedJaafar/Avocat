<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class VilleController extends Controller
{
   


    public function villeAction()
    {
    	 $list_ville = array();


        $request = $this->container->get('request');


        


        //vérifier le type de la requête

        if ($this->container->get('request')->isXmlHttpRequest()) {


            


            //Récuperer le choix que vous fait dans la liste déroulante "Pays : "

            $id = $request->request->get('id');

            //Faire la requête pour récurer la liste des ville du pays sélectionné, grâce à leur "id" (fr, ma, es..), insérer ce résultat dans $villes   
			 $villes = $this->getDoctrine()
        ->getRepository('FrontBundle:Villes')->findBy(
  array('gouvernorats' => $id)     
 
);

            //Remplir la liste déroulante avec le résultat  

            foreach ($villes as $v) {

                $list_ville[$v->getId()] = $v->getVille();

            }

        }

        


        //Instancier une "réponse" grâce à l'objet "Response"

        $response = new Response(json_encode($list_ville));


       //Lui indiquer le type de format dans le quelle est envoyé la reponse

        $response->headers->set('Content-Type', 'application/json');


       //Retourner la tout à notre liste déroulante

     return $response;
        return $this->render('FrontBundle:Profile:Profile.html.twig');

    }
}
