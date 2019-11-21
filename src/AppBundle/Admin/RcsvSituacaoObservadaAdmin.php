<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

/**
 * Description of RcsvSituacaoObservadaAdmin
 *
 * @author cenipa
 */

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;


class RcsvSituacaoObservadaAdmin extends AbstractAdmin{
    //put your code here
    
     
         protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
			->add('situacaoTipoId')
            ->add('nomeSituacao')
            ->add('descricaoSituacao')
			
                          

       ;         
        
    }
     protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
		->add('situacaoTipoId', 'text', array('label' => 'Tipo de Situação'))
        ->add('nomeSituacao')
            ->add('descricaoSituacao')
			->add('_action', 'actions', array(
                        'actions' => array(
						
                        'edit' => array(),
					
					                     
                    )
                ))
      
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
		->add('situacaoTipoId')
          ->add('nomeSituacao')
            ->add('descricaoSituacao')
              
               
        ;
    }
}
