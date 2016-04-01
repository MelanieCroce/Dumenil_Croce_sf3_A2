<?php

namespace ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use ArticleBundle\Entity\Post;

use ArticleBundle\Form\PostType;


class ArticleController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArticleBundle:Article:index.html.twig');
    }
	
	
	public function addAction(Request $request)
	{

		$article = new Post;
		
		$article->setDate(new \Datetime());
		
		$form = $this->createForm(PostType::class, $article);

		$form->handleRequest($request);
		if ($form->isValid()) {
		  // On l'enregistre notre objet $advert dans la base de données, par exemple
		  $em = $this->getDoctrine()->getManager();
		  $em->persist($article);
		  $em->flush();

		  $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

		  // On redirige vers la page de visualisation de l'annonce nouvellement créée
		  return $this->redirect($this->generateUrl('article_view', array('id' => $article->getId())));
		}

		return $this->render('ArticleBundle:Article:add.html.twig', array(
		  'form' => $form->createView(),
		));		
			
	}
	
	public function editAction()
	{


		return $this->render('ArticleBundle:Article:edit.html.twig');
	}
	
	public function viewAction($id)
	{
		$repository = $this
		  ->getDoctrine()
		  ->getManager()
		  ->getRepository('ArticleBundle:Post')
		;
		
		$post = $repository->findOneBy(array('id' => $id));

		return $this->render('ArticleBundle:Article:view.html.twig', array(
		  'post' => $post
		));
		
		
	}
}