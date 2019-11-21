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





class ElosAdmin extends AbstractAdmin{
    //put your code here
     protected $baseRouteName = 'rcsv_elos_sipaer';
     protected $baseRoutePattern = 'page-elos-sipaer';
     
         protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nomeElo')
            ->add('siglaElo')
			->add('emailElo')
			->add('enderecoElo')
			->add('telefoneElo')
                          

       ;         
        
    }
     protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->add('nomeElo')
            ->add('siglaElo')
			->add('emailElo')
			->add('enderecoElo')
			->add('telefoneElo')
			
			->add('_action', 'actions', array(
                        'actions' => array(
						
                        'edit' => array(),
						'delete' => array(),
						                     
                    )
                ))
      
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
           ->add('siglaElo')
			->add('emailElo')
              
               
        ;
    }
	
	
}
