<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
   /**
    * @Route("/genus/{genusName}")
    */
    public function showAction($genusName)
    {
        $notes = [
            'Octupus asked me a riddle, outsmarted me!',
            'I counted 8 tentacles...as they wrapped around me :)',
            'Inked'
        ];

        return $this->render('genus/show.html.twig', [
            'name'  => $genusName,
            'notes' => $notes
        ]);
    }
}
