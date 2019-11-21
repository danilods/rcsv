<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class AerodromoGeralAdmin extends AbstractAdmin
{
	
    protected $emName = 'taxonomia';
    
    
    
    protected function configureFormFields(FormMapper $formMapper)
    {
		if ($this->hasAccess('CREATE')) {
			$formMapper
            ->add('nome')
            ->add('icao')
            ->add('iata')
            ->add('cidade', 'entity', array('class' => 'AppBundle\Entity\GeografiaCidade'))
            ->add('propriedade')
            ->add('tipo')
            ->add('latitude')
            ->add('longitude')
       ;         
		}
        
    }
     protected function configureListFields(ListMapper $listMapper)
    {
		if ($this->hasAccess('VIEW')) {
    
	
        $listMapper
            ->add('nome', 'text')
            ->add('icao')
            ->add('iata')
            ->add('cidade', 'text')
            ->add('propriedade')
            ->add('tipo')
            ->add('latitude')
            ->add('longitude')
        ;
		
		}
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
           ->add('nome')
                  ->add('icao')
            ->add('iata')
        
            ->add('tipo')
          
              
               
        ;
    }
}