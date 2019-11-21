<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

/**
 * Description of GeografiaCidadeAdmin
 *
 * @author danilodesouza
 */

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;




class RcsvMissaoTipoAdmin extends AbstractAdmin{
    //put your code here
    protected $emName = 'taxonomia';
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nomeTipoMissao', 'text')
            
                ->add('descricao', 'text')
        ;
    }
     protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
             ->addIdentifier('nomeTipoMissao')
            ->add('descricao')
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
           ->add('nomeTipoMissao')
          
              
               
        ;
    }
}
