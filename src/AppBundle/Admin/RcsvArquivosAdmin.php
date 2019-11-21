<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

/**
 * Description of RcsvArquivosAdmin
 *
 * @author cenipa
 */
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class RcsvArquivosAdmin extends AbstractAdmin {

    //put your code here


    protected function configureFormFields(FormMapper $formMapper) {




        $formMapper
                ->tab('Arquivos')
                ->add('tipo')
                ->add('nomeArquivo')
                ->add('file', 'file', array(
                    'required' => false
                ))
                ->add('media', 'ckeditor', array(
                    'config' => array(
                        'toolbar' => array(
                            array(
                                'name' => 'links',
                                'items' => array('Link', 'Unlink'),
                            ),
                            array(
                                'name' => 'insert',
                                'items' => array('Image'),
                            ),
                        ),
                    ),
                ))
                ->end()






        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     *
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('tipo')

        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     *
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper->add('tipo')

        ;
    }

    public function getPersistentParameters() {
        if (!$this->getRequest()) {
            return array();
        }

        return array(
            'provider' => $this->getRequest()->get('provider'),
            'context' => $this->getRequest()->get('context'),
        );
    }

    public function prePersist($image) {
        $this->manageFileUpload($image);
    }

    public function preUpdate($image) {
        $this->manageFileUpload($image);
    }

    private function manageFileUpload($image) {
        if ($image->getFile()) {
            $image->refreshUpdated();
        }
    }

}
