<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

/**
 * Description of ImageAdmin
 *
 * @author cenipa
 */
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ImageAdmin extends AbstractAdmin {

    protected function configureListFields(ListMapper $listMapper) {



        return $listMapper->addIdentifier('tipo')
                        ->add('fileds')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
            ->with('General')
            ->add('tipo')
            ->add('file', 'file', array(
                'required' => false
            ))

           
        ;
    }

   public function prePersist($image)
    {
        $this->manageFileUpload($image);
    }

    public function preUpdate($image)
    {
        $this->manageFileUpload($image);
    }

    private function manageFileUpload($image)
    {
        if ($image->getFile()) {
            $image->refreshUpdated();
        }
    }
   

}
