<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

/**
 * Description of PhotoAdmin
 *
 * @author cenipa
 */
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class PhotoAdmin extends AbstractAdmin {

    protected function configureListFields(ListMapper $listMapper) {



        return $listMapper->addIdentifier('title')
                        
                          ->add ('date');
                    
    }

    protected function configureFormFields(FormMapper $formMapper) {
       
 return $formMapper->add('title')
                       
                        ->add('date')
                       ->add('photo', 'sonata_type_model_list', array(
                'cascade_validation' => true,
                'required' => false,
            ), array(
                    'edit' => 'inline',
                    'inline' => 'table',
                    'sortable' => 'position',
                    'link_parameters' => array('provider' => 'sonata.media.provider.file'),
                    'admin_code' => 'sonata.media.admin.gallery',
                )
            );
                     
    }

		public function getPersistentParameters()
		{
		    if (!$this->getRequest()) {
			return array();
		    }

		    return array(
			'provider' => $this->getRequest()->get('provider'),
			'context'  => $this->getRequest()->get('context'),
		    );
		}

}
