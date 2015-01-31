<?php

namespace Bonnezannonces\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Bonnezannonces\MainBundle\Entity\Categorie;
use Bonnezannonces\MainBundle\Entity\CategorieRepository;
use Bonnezannonces\UserBundle\Entity\User;
use Bonnezannonces\UserBundle\Entity\UserRepository;

class MainController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $annonces = $em->getRepository('MainBundle:Annonce')->findAll();
        return $this->render('MainBundle:Main:index.html.twig', array(
            'annonces' => $annonces
        ));
    }
    
    public function categorieAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('MainBundle:Categorie')->getCategories();
        
        for($i=2;$i<=8;$i++) {
            $subcategories[$i] = $em->getRepository('MainBundle:Categorie')->getSubCategories($i);
        }
        return $this->render('MainBundle:Main:categorie.html.twig', array('categories'=>$categories,
                                                                          'subcategories'=>$subcategories));
    }

    
    public function parCategorieAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('MainBundle:Annonce')->findBy(array('idCategorie'=>$id));
        return $this->render('MainBundle:Main:par_categorie.html.twig',array('annonces'=>$annonces));
    }
}
