<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 
 *
 * @author cenipa
 */

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;


class RcsvTaxonomiaCondicoesMeteorologicasAdmin extends AbstractAdmin{
    //put your code here
    
    
    
         protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('condicaoTempo')
            ->add('descricao')
                          

       ;         
        
    }
     protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('condicaoTempo')
            ->add('descricao')
      
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
         ->add('condicaoTempo')
            ->add('descricao')
               
        ;
    }
}
