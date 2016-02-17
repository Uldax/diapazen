<?php

namespace PollBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BaseController extends Controller
{

    public function isUserConnected()
    {
        return ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED'));
    }

    public function homeAction(Request $request)
    {
        // On set la variable Ã  afficher sur dans la vue
        $title='Accueil | Diapazen';
        $year=date('Y');
        //Si l'utilisateur est connecté, que le retour sur home c'est fait (login) et qu'il existe un sondage dans session  alors on redirige vers share
        if ($this->isUserConnected() && isset($_SESSION['pool'] )) {
            // authenticated REMEMBERED, FULLY will imply REMEMBERED (NON anonymous)
            return $this->redirect($this->generateUrl('poll_share'));
        }

        //Formaulaire nécésaire pour la selection
        $form = $this->createFormBuilder()
            ->add('Type', 'hidden', array('data' => 'c3' , ))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $choixtype = $form->get('Type')->getData();
            if (!empty($choixtype)){
                return $this->redirect($this->generateUrl('poll_creation', array('type' => $choixtype )));
            }
        }

        else
        {
            return $this->render('PollBundle:Base:home.html.twig', array('title'=>$title, 'year'=>$year, 'form'=>$form->createView()));
        }
    }

    public function AboutAction($params = null)
    {
        // Titre de la page
        //$this->set('title', 'À propos | Diapazen');
        $title='Accueil | Diapazen';
        $year=date('Y');
        // Rendu
        return $this->render('PollBundle:Base:about.html.twig', array('title'=>$title, 'year'=>$year, 'last_username'));
        //$this->render('about');

    }

}