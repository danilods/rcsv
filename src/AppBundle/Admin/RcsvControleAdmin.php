<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

/**
 * Description of RcsvControleAdmin
 *
 * @author cenipa
 */

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

class RcsvControleAdmin extends AbstractAdmin{
  
    protected function configureFormFields(FormMapper $formMapper) {

 
        
        $formMapper
             
                
             
                ->add('diaEncaminhamento', 'sonata_type_date_picker',
                        array('label'=>'Selecione a data','dp_language'=>'pt_BR','format'=>'dd/MM/yyyy',
                            'dp_use_current' => true,
							'required' => false,
							
                           							)
				
							)
							 ->add('tipoDocumento', 'choice', array(
                                    'choices' => array(
                                        'DOCUMENTO DE COBRANÇA' => 'DOCUMENTO DE COBRANÇA',
										'DOCUMENTO DE RECOBRANÇA' => 'DOCUMENTO DE RECOBRANÇA',
                                        'FEEDBACK' => 'FEEDBACK',
										'OUTRO' => 'OUTRO'
                            ),
									'label' => 'Tipo de documento',
										'required'=>true,
										'expanded' => false, 
										'multiple' => false
							
							))
							
							->add('obsEncaminhamento', null, array(
										   'label' => 'Historico', 
										   'attr' => array('style' => 'height:100px')
										  ))  
            
                
          
                 
                ->add('imageFile', 'vich_file', array(
            'label' => 'Anexo',
            'required'      => false,
            'allow_delete'  => false, // not mandatory, default is true
            'download_link' => true, // not mandatory, default is true
                  
        ))
                
           
               
              
               
                           
               
                
                
              
                    
                    
                  
                    
                    

        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     *
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                 ->addIdentifier('diaFeedback')
                ->add('diaEncaminhamento')
                ->add('obsEncaminhamento')
               
                ->add('rcsvDespacho')
              
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     *
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
     
    }
    
    
}
