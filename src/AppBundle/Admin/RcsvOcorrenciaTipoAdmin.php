<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

/**
 * Description of RcsvOcorrenciaTipoAdmin
 *
 * @author cenipa
 */

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;

class RcsvOcorrenciaTipoAdmin extends AbstractAdmin{
    //put your code here
    

    /**
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     *
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper) {

        
            

        $formMapper
                        
                ->add('regraDeVoo', 'choice', array(
                                    'choices' => array(
                                        'VFR' => 'VFR',
                                        'IFR' => 'IFR',
                                        'NÃO APLICÁVEL' => 'NÃO APLICÁVEL'
                            )))
               
				
							
				


                ->add('consequenciaOcorrencia', 'entity', array('class' => 'AppBundle\Entity\RcsvTaxonomiaConsequenciaOcorrencia'))
               // ->add('situacaoObservada', 'entity', array('class' => 'AppBundle\Entity\RcsvTaxonomiaSituacaoObservada'))
                ->add('missao', 'entity', array('class' => 'AppBundle\Entity\RcsvTaxonomiaMissao'))
                ->add('fasevoo', 'entity', array('class' => 'AppBundle\Entity\TaxonomiaFasevoo'))
                
                
                 ->add('aeronave', 'sonata_type_model_autocomplete', array(
                          'class' => 'AppBundle\Entity\AeronaveGeral',
                          'property' => 'matricula',
			  'placeholder' => '---------- ---- Clique e digite a matricula da Aeronave ---- ---------',
                          'minimum_input_length' => 1,
                          'to_string_callback' => function($enitity, $property) {
                                return 'MATRÍCULA: '. $enitity->getMatricula(). ' - '. $enitity->getEquipamento().' - '.$enitity->getFabricanteNome(). ' - '.$enitity->getModelo();
                            },
                ))

		->add('matriculaExtra')
                
                
                                    
                ->add('aeronaveCategoria', 'sonata_type_model_autocomplete', array(
                          'class' => 'AppBundle\Entity\AeronaveCategoria',
			'placeholder' => '-------- --- Clique e digite a categoria da Aeronave ---- --------',

                          'property' => 'nome',
                          'minimum_input_length' => 1
                ))
				
				 
				

             			
			
                            ->add('periodoDia')
							->add('condicaoVoo')
							->add('condicaoMeteorologica')
							->add('condicaoLocalTrabalho')
							


               
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     *
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
              ->add('regraDeVoo')
              ->add('aeronave', 'entity', array('class' => 'AppBundle\Entity\AeronaveGeral'))
              ->add('consequenciaOcorrencia', 'entity', array('class' => 'AppBundle\Entity\RcsvTaxonomiaConsequenciaOcorrencia'))
              ->add('situacaoObservada', 'entity', array('class' => 'AppBundle\Entity\RcsvTaxonomiaSituacaoObservada'))
              ->add('missao', 'entity', array('class' => 'AppBundle\Entity\RcsvTaxonomiaMissao'))
              ->add('fasevoo', 'entity', array('class' => 'AppBundle\Entity\TaxonomiaFasevoo'))
            //  ->add('ocorrenciaRcsv', 'hidden','entity', array('class' => 'AppBundle\Entity\RcsvOcorrencia'))
              ->add('aeronaveCategoria', 'entity', array('class' => 'AppBundle\Entity\AeronaveCategoria'))
            ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     *
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper->add('aeronave')

        ;
    }

    
    
    
    
}
