<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

/**
 * Description of RcsvNotificadorTipoAdmin
 *
 * @author cenipa
 */

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

class RcsvNotificadorTipoAdmin extends AbstractAdmin{
    //put your code here
    
    
     protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
             ->add('tipoNotificador')
            ->add('notificadorTipo', 'entity', array('class' => 'AppBundle\Entity\RcsvTaxonomiaNotificadorTipo'))
       
             
        ;
                
    }


    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('tipoNotificador')
                 ->add('notificadorTipo', 'entity', array('class' => 'AppBundle\Entity\RcsvTaxonomiaNotificadorTipo'))
         
            
       ;         
        
    }
     protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('tipoNotificador')
                 ->add('notificadorTipo', 'entity', array('class' => 'AppBundle\Entity\RcsvTaxonomiaNotificadorTipo'))
        
           
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
           ->add('tipoNotificador')
              
               
        ;
    }
    
}
