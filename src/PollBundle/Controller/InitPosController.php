<?php
namespace PollBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * UserController
 *
 * Contrôleur de la page des utilisateurs
 *
 * @package		Diapazen
 * @subpackage	Controller
 */
class InitPosController extends Controller
{

// si le tableau reçu est vide ou n'existe pas, on ne peut pas continuer le sondage
	public function initPosAction($valeur)
	{
		$tab = split("-",$valeur);
//		$valeurphp = "<script language='Javascript'> alert(document.write(y)); </script>";
//		  $valeurphp;
		  //$_SESSION['position'] = $this->getRequest()->request->post('y');
		  //$_SESSION['position'] = $valeurphp;
//		if(isset($_POST['position'])){
//		if($_POST['position'] != ""){
//			$_SESSION['position'] =  $valeurphp;
//			//echo (json_encode("etat"=>true));
//		}else{
//			//echo (json_encode("etat"=>false));
//		}
//		}else{
//			//echo (json_encode("etat"=>false));
//		}
		$request = $this->container->get('request');

		if($request->isXmlHttpRequest())
		{
			//$x = '';
			//$x = $request->request->get('x');

			//$em = $this->container->get('doctrine')->getEntityManager();

			if(isset($tab))
			{
//				   $qb = $em->createQueryBuilder();
//
//				   $qb->select('a')
//					  ->from('MyAppFilmothequeBundle:Acteur', 'a')
//					  ->where("a.nom LIKE :motcle OR a.prenom LIKE :motcle")
//					  ->orderBy('a.nom', 'ASC')
//					  ->setParameter('motcle', '%'.$motcle.'%');
//
//				   $query = $qb->getQuery();
//				   $acteurs = $query->getResult();
				$i = 0;
				$maxTab = count($tab);
				foreach($tab as $elem)
				{
					//$tab[$i] = trim($tab[$i]);
					$tab[$i] =floatval($tab[$i]);
					$i++;
				}
				//unset($tab[$maxTab-1]);
				//unset($tab[$maxTab-2]);
//				$type = gettype($maxTab);
//				array_push($tab, $maxTab);
				$this->container->get('request')->getSession()->set('position', $tab);
				$_SESSION['position'] = $tab;
				//$params = $router->match('/connect');
				//$uri    = $router->generate('bdls_projet_connect');
				$year=date('Y');
				$title = 'Connexion | Diapazen';
				return $this->redirect($this->generateUrl('bdls_projet_connect'));
				//return $this->render('BdlsProjetBundle:Default:twigTest.html.twig',array('title'=>$title, 'year'=>$year, 'mot'=>$_SESSION['position']));
				//$response = $this->forward('ProjetBundle:Model:insertPlaceChoices', array(
				//	'year'  => $year,
				//	'title' => $title,
				//));

				// ... modifiez encore la réponse ou bien retournez-la directement

				//return $response;

				//return $this->redirect($this->generateUrl('home',301));
				//return $this->render('BdlsProjetBundle:Default:twigTest.html.twig',array('title'=>$title, 'year'=>$year, 'mot'=>$_SESSION['position']));
			}
			else {
				//$acteurs = $em->getRepository('MyAppFilmothequeBundle:Acteur')->findAll();
				//$this->container->get('request')->getSession()->set('position', "Vide");
				$sess = $request->getSession()->set('position',"Vide");
				$_SESSION['position'] = "Vide";
			}
			//echo $_SESSION['position']+"init";
//			return $this->container->get('templating')->renderResponse('MyAppFilmothequeBundle:Acteur:liste.html.twig', array(
//				'acteurs' => $acteurs
//				));
		}
//		else {
//			return $this->listerAction();
//		}
		//$tab = unserialize($valeur);
		$year=date('Y');
		$title = 'Connexion | Diapazen';
		return $this->render('BdlsProjetBundle:Default:twigTest.html.twig',array('title'=>$title, 'year'=>$year, 'mot'=>$_SESSION['position']));
	}
}
//pos();

