<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

/**
 * Description of RcsvAreaOcorrenciaAdmin
 *
 * @author cenipa
 */

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

class RcsvAreaOcorrenciaAdmin extends AbstractAdmin{
    //put your code here
    
     protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('areaOcorrencia')
           
                          

       ;         
        
    }
     protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('areaOcorrencia')
      
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
           ->add('areaOcorrencia')
              
               
        ;
    }
    
}
