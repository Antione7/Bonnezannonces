<?php

namespace Bonnezannonces\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CategorieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategorieRepository extends EntityRepository
{
    public function getCategories() {
        $query = $this->getEntityManager()
                        ->createQuery('SELECT c FROM MainBundle:Categorie c
                                      WHERE c.idCategorie1 is NULL');
        return $query->getResult();
    }

    public function getSubCategories($cat) {
   $query = $this->createQueryBuilder('c')
                ->where('c.idCategorie1 = :cat')
                ->setParameter('cat',$cat);
        return $query->getQuery()->getResult();
    }
    
}