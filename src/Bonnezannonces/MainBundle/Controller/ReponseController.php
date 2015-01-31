<?php

namespace Bonnezannonces\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Bonnezannonces\MainBundle\Entity\Annonce;
use Bonnezannonces\MainBundle\Entity\Reponse;
use Bonnezannonces\MainBundle\Form\AnnonceType;
use Bonnezannonces\MainBundle\Form\ReponseType;
use Bonnezannonces\MainBundle\Form\UserType;
use Bonnezannonces\UserBundle\Entity\User;
use Bonnezannonces\UserBundle\Entity\UserRepository;

/**
 * Reponse controller.
 *
 * @Route("/reponse")
 */
class ReponseController extends Controller
{
        /**
     * Displays a form to create a new Reponse entity.
     *
     * @Route("/new/{id}", name="reponse_new")
     * @Template("MainBundle:Reponse:new.html.twig")
     */
    public function newAction($id, Request $request)
    {
        $annonce=$this->getDoctrine()->getManager()->getRepository('MainBundle:Annonce')->find($id);
        $entity = new Reponse($annonce);
        $form = $this->createForm(new ReponseType(), $entity, array(
            'action' => $this->generateUrl('reponse_new', array('id'=> $id)),
            'method' => 'POST'));                 
        $form->add('submit', 'submit', array('label' => 'Envoyer','attr'=>array('class'=>'btn btn-sm btn-success pull-right')));
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('main_homepage'));
        }
        
        return array(
            'form'   => $form->createView(),
        );
    }
}