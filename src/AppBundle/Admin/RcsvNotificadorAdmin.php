<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

/**
 * Description of RcsvNotificadorAdmin
 *
 * @author cenipa
 */
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;

class RcsvNotificadorAdmin extends AbstractAdmin {

    //put your code here


   

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
               ->with('Dados Gerais do RCSV',
                    array(
                        'class'       => 'col-md-4-offset-8',
                        'description' => 'Relatório ao Cenipa para Segurança de Voo',
                        // ...
                        ))
                ->add('nome')
                ->add('cpf')
                ->add('telefone')
                ->add('email','email')
                ->add('numHabilitacao')
				->add('eloSipaer',null, array(
				'label' => 'Órgão/Empresa/Elo Sipaer'))
                ->add('orgaoEmpresa',null, array(
				'label' => 'Órgão/Empresa informado pelo usuário'))
				
				
               /* 
                ->add('rcsvOcorrencia', 'sonata_type_collection', array(
                    'required' => true,
                    'type_options' => array(
                        'delete' => true,
                        'cascade_validation' => true
                    ),
                    'by_reference' => true,
                    'mapped' => true
                        ), array(
                    'edit' => 'inline',
                    'inline' => 'inline',
                    'sortable' => 'position',
                        //   'targetEntity'  => 'Cenipa\UserBundle\Entity\OcorrenciaAeronave',
                        //   'admin_code'    => 'sonata.admin.ocorrencia_aeronave'
                ))*/
          //      ->add('rcsvOcorrencia', 'sonata_type_model_list', array('required' => false), array('link_parameters'   => array('context' => 'ocorrencia')))
               ->end()

        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                
                
                ->addIdentifier('nome')
                ->add('cpf')
                ->add('telefone')
                ->add('email')
                ->add('numHabilitacao')
                ->add('orgaoEmpresa')
                
                    


        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('nome')
                ->add('cpf')
                ->add('telefone')
                ->add('email')
                ->add('numHabilitacao')
                ->add('orgaoEmpresa')
				->add('eloSipaer',null, array(
				'label' => 'Órgão/Empresa/Elo Sipaer'))

        ;
    }
    
    
    
    public function prePersist($object){

        foreach ($object->getRcsvOcorrencia() as $notificador) {

            $notificador->setNotificador($object);
        }
    }

   

}
