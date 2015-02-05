<?php

namespace MySymphony\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MySymphony\BlogBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{

    public function indexAction()
    {

    	$repository = $this->getDoctrine()->getRepository('MySymphony\BlogBundle\Entity\Post');
    	$posts = $repository->findAll();
    	
        return $this->render('MySymphonyBlogBundle:Default:index.html.twig', array('posts' =>$posts ));
    }
    public function postAction($id){
    	$repository = $this->getDoctrine()->getRepository('MySymphony\BlogBundle\Entity\Post');
    	$post = $repository->find($id);
    	//print_r($post);die;
    	if(!$post){
    		throw $this->createNotFoundException(
            'No product found for id '.$id
        );
    	}
    	return $this->render('MySymphonyBlogBundle:Default:view.html.twig',array('post'=>$post));
    }
    public function newAction(){

    	return $this->render('MySymphonyBlogBundle:Default:new.html.twig');
    }
    public function storeAction(Request $request){
    	
    	$post = new Post;
    	$post->setTitle($request->get('title'));
    	$post->setDescription($request->get('description'));
    	$post->setCreatedAt(new \DateTime());
    	$post->setUpdatedAt(new \DateTime());

    	$em = $this->getDoctrine()->getManager();

    	$em->persist($post);
    	$em->flush();

    	return $this->redirect($this->generateUrl('my_symphony_blog_view',array('id'=>$post->getId())));
    }
    public function deleteAction($id){

    	$repository = $this->getDoctrine()->getRepository('MySymphony\BlogBundle\Entity\Post');
    	$post = $repository->find($id);
    	//print_r($post);die;
    	if(!$post){
    		throw $this->createNotFoundException(
            'No product found for id '.$id
        );
    	}

    	$em = $this->getDoctrine()->getManager();

    	$em->remove($post);
    	$em->flush(); 

    	$response = new Response();

		$response->setContent('One Record Deleted');
		$response->setStatusCode(Response::HTTP_OK);
		$response->headers->set('Content-Type', 'application/json');

		// prints the HTTP headers followed by the content
		$response->send();
		return $response;
	}
}
