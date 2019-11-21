<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

/**
 * Description of MediaAdmin
 *
 * @author cenipa
 */
class MediaAdmin extends AbstractAdmin{
    //put your code here
    
     protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->tab('Post')
                ->with('Content', array('class' => 'col-md-9'))
                ->add('title', 'text')
               
                ->add('file', 'sonata_media_type', array(
                 'provider' => 'sonata.media.provider.file',
                 'context'  => 'news'
            ))
                ->end()
                ->end()
               
        ;
    }


 protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('Title')
           
           
        ;
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
