<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

/**
 * Description of RcsvTaxonomiaMissaoAdmin
 *
 * @author cenipa
 */
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;


class RcsvTaxonomiaMissaoAdmin extends AbstractAdmin{
    //put your code here
    
    
      protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
             ->add('tipoMissao')
			// ->add('missaoTipoId')
			
       
             
        ;
                
    }


    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('tipoMissao')
			->add('missaoTipoId', 'entity', array('class' => 'AppBundle\Entity\RcsvMissaoTipo',
											'label' => 'Nome da Missão'
											))     
            
       ;         
        
    }
     protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('tipoMissao', 'text', array('label'=> 'Nome da Missão'))
			->add('missaoTipoId','text', array('label' => 'Tipo de Missão'))
        
           
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
           ->add('tipoMissao')
              
               
        ;
    }
}
