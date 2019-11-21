<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Admin;

/**
 * Description of LixeiraAdmin
 *
 * @author cenipa
 */

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class LixeiraAdmin extends AbstractAdmin{
    //put your code here
    
    
    
        
     protected $baseRouteName = 'rcsv_lixeira';
    protected $baseRoutePattern = 'page-lixeira';
    
      public function createQuery($context = 'list')
{
    $query = parent::createQuery($context);
    $query->andWhere(
        $query->expr()->eq($query->getRootAliases()[0]. '.situacaoRcsv', ':my_param')
    );
    $query->setParameter('my_param', 'LIXEIRA');
    return $query;
}
    
     protected function configureFormFields(FormMapper $formMapper) {



 $formMapper
                ->tab('Ocorrência Geral')
                        ->with('Dados Gerais do RCSV', array(
                        'class' => 'col-md-5',
                            'box_class' => 'box box-solid box-primary',
                        'description' => 'Relatório ao Cenipa para Segurança de Voo',
                            // ...
                    ))
                              ->add('numeroRcsv', null, array(
								'label' => 'Número do processo',
								'read_only' => true,
								'disabled' => true
							)
							)
                             ->add('tipoReporte', 'choice', array(
                                    'choices' => array(
                                        'CIVIL' => 'CIVIL',
										'ESTRANGEIRA' => 'ESTRANGEIRA',
                                        'MILITAR' => 'MILITAR'
                            ),
									'label' => 'Tipo de reporte',
										'required'=>true,
										'expanded' => true, 
										'multiple' => false
							
							))
                                ->add('cidade', 'sonata_type_model_autocomplete', array(
                                    'property' => array('nome', 'latitude', 'longitude'),
                                    //'class' => 'col-md-9',
                                    'placeholder' => 'Clique e selecione um município',
                                    'minimum_input_length' => 1,
                                    'to_string_callback' => function($enitity, $property) {
                                return $enitity->getNome() . ' - ' . $enitity->getUf()->getNome() . ' - ' . $enitity->getPais()->getNome();
                            },
                                ))
                                // ->add('cidade', 'entity', array('attr'=>array('data-sonata-select2-allow-clear'=>'true'),'class' => 'AppBundle\Entity\GeografiaCidade'))               
                                ->add('aerodromo', 'sonata_type_model_autocomplete', array(
                                    'property' => array('nome', 'icao', 'iata'),
                                    //'class' => 'col-md-9',
                                    'placeholder' => 'Clique e selecione um Aeródromo',
                                    'minimum_input_length' => 1,
                                    'to_string_callback' => function($enitity, $property) {
                                return $enitity->getIcao() . ' - ' . $enitity->getIata() . ' - ' . $enitity->getNome() . ' - ' . $enitity->getCidade()->getNome();
                            },
                                ))
                                //->add('aerodromo', 'entity', array('attr'=>array('data-sonata-select2-allow-clear'=>'true'),'class' => 'Cenipa\UserBundle\Entity\AerodromoGeral'))
                              ->add('dataOcorrencia', 'sonata_type_date_picker',
                        array('label'=>'Selecione a data','dp_language'=>'pt','format'=>'dd/MM/yyyy',
                            'dp_use_current' => true,
                            ))
                
                                ->add('horaLocal')
				->add('rcsvHistorico', null, array(
										   'label' => 'Historico', 
										   'attr' => array('style' => 'height:500px')
										  ))                                

                                ->add('tipoNotificador', 'entity', array('class' => 'AppBundle\Entity\RcsvFuncaoNotificador'))
                                // ->add('ocorrencia' ,'sonata_type_model', array('expanded' => true))
                                ->add('classificacao', 'entity', array('class' => 'AppBundle\Entity\RcsvTaxonomiaClassificacao',
                                    ))

							->add('ocorrenciaTipo', 'sonata_type_collection', array(
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
                            ))
					
                        ->end()
						
						->with('CONFIRMAÇÃO DO RELATO', array(
                                    'class' => 'col-md-7',
                                    'box_class' => 'box box-solid box-warning',
                                        // ...
                                ))
								
							 ->add('classificacao', 'entity', array('class' => 'AppBundle\Entity\RcsvTaxonomiaClassificacao',
                                    ))
							->add('situacaoRcsv', 'choice', array(
                                    'choices' => array(
                                       
                                        
                                       
										'AGUARDANDO RESPOSTA' => 'AGUARDANDO RESPOSTA',
                                        'ENCERRADO' => 'ARQUIVAR',
										'LIXEIRA' => 'LIXEIRA'
                            ),
										'label' => 'Encaminhamento do Relato',
										'required'=>true,
										'expanded' => true, 
										'multiple' => false
							))	
							
							
							->end()
                                    
                                                    ->with('Controle e acompanhamento', array(
                                    'class' => 'col-md-7',
                                    'box_class' => 'box box-solid box-primary',
                                    'description' => 'Informações sobre o andamento do relato.',
                                        // ...
                                ))
								
				
					
                ->add('ocorrenciaControle', 'sonata_type_collection', array(
                    'by_reference' => false,
                    'required' => true,
                    'type_options' => array(
                        'delete' => true,
						
                        'cascade_validation' => true
                    ),
                    'mapped' => true
                        ), array(
                    'edit' => 'inline',
                    'inline' => 'table',
                        //   'targetEntity'  => 'Cenipa\UserBundle\Entity\OcorrenciaAeronave',
                        //  'admin_code'    => 'admin_rcsv_controle'
                ))
                            
							
							
							
                            ->end()
                ->end()
				
				
                ->tab('Notificador')
                ->with('Dados Gerais do Notificador', array(
                    'class' => 'col-md-8',
                    'description' => 'Relatório ao Cenipa para Segurança de Voo',
                        // ...
                ))
                ->add('notificadorOcorrencia', 'sonata_type_collection', array(
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
                ))
                ->end()
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
		 
                ->add('numeroRcsv')
                 ->add('dataOcorrencia', 'date', array(
                'pattern' => 'dd MMM y G',
                'locale' => 'pt',
                'timezone' => 'SaoPaulo/Sao_Paulo',
            ))
                ->add('horaLocal')
                ->add('situacaoRcsv')
               ->add(
    'tipoReporte',
    'choice',
    array(
        
        'choices' => array('r'=>'red', 'g'=>'green', 'b'=>'blue'))
)
                ->add('cidade', 'entity', array('class' => 'Cenipa\UserBundle\Entity\GeografiaCidade'))
               
                ->add('aerodromo', 'entity', array('class' => 'Cenipa\UserBundle\Entity\AerodromoGeral'))
                ->add('_action', 'actions', array(
                        'actions' => array(
                        
                        'edit' => array(),
                        'delete' => array(),
                    )
                ))
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     *
     * @return void
     */
   protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper->add('tipoReporte', 'doctrine_orm_choice', array('label' => 'Tipo reporte (avia��o)',
                    'field_options' => array(
                        'required' => false,
                        'choices' => array("CIVIL" => "CIVIL", "ESTRANGEIRA" => "ESTRANGEIRA", "MILITAR" => "MILITAR")
                    ),
                    'field_type' => 'choice'
                ))
                ->add('tipoNotificador')
				->add('numeroRcsv')

                ->add('classificacao')
                ->add('dataOcorrencia','doctrine_orm_date_range', array('required' => false),'sonata_type_date_range_picker',
					array('field_options_start' => array('format' => 'dd-MM-yyyy',
															'widget' => 'single_text',
															'label' => 'Data inicial'),
					'field_options_end' => array('format' => 'dd-MM-yyyy',
													'widget' => 'single_text',
													'label' => 'Data final'))
					)
                
               
               ->add('cadastroEm','doctrine_orm_date_range', array('required' => false),'sonata_type_date_range_picker',
					array('field_options_start' => array('format' => 'dd-MM-yyyy',
															'widget' => 'single_text',
															'label' => 'Data inicial'),
					'field_options_end' => array('format' => 'dd-MM-yyyy',
													'widget' => 'single_text',
													'dp_side_by_side' => true,
													
													
													'label' => 'Data final'))
					)
                
                ->add('prioridade')
              
							  
              ->add('cidade', 'doctrine_orm_model_autocomplete', array(
						), null, array(
                    'property' => 'nome'
                ))
			  
			  
			  
              
				->add('aerodromo', 'doctrine_orm_model_autocomplete', array(
						), null, array(
                    'property' => 'icao'
                ))
				
				  ->add('ocorrenciaTipo.aeronave', 'doctrine_orm_model_autocomplete', array(
						), null, array(
                    'property' => 'matricula'
                ))
			
                ->add('ocorrenciaTipo.regraDeVoo', 'doctrine_orm_choice', array('label' => 'Regra de Voo',
                    'field_options' => array(
                        'required' => false,
                        'choices' => array("VFR" => "VFR", "IFR" => "IFR")
                    ),
                    'field_type' => 'choice'
                ))
               
                ->add('ocorrenciaTipo.consequenciaOcorrencia')
                
                ->add('ocorrenciaTipo.situacaoObservada')
           
                ->add('ocorrenciaTipo.missao')
                ->add('ocorrenciaTipo.fasevoo')
                ->add('ocorrenciaTipo.aeronaveCategoria')
                ->add('notificadorOcorrencia.eloSipaer')                
                ;
    }

    public function prePersist($object) {

         foreach ($object->getOcorrenciaTipo() as $tipo) {

            $tipo->setOcorrenciaRcsv($object);
        }
        
        
        foreach ($object->getNotificadorOcorrencia() as $notificador) {

            $notificador->setOcorrencia($object);
        }



        foreach ($object->getOcorrenciaControle() as $ocorrencia) {

            $ocorrencia->setOcorrencia($object);
        }
    }

    public function preUpdate($object) {

         foreach ($object->getOcorrenciaTipo() as $tipo) {

            $tipo->setOcorrenciaRcsv($object);
        }
        
        
        foreach ($object->getNotificadorOcorrencia() as $notificador) {

            $notificador->setOcorrencia($object);
        }



        foreach ($object->getOcorrenciaControle() as $controle) {

            $controle->setOcorrencia($object);
        }
    }
}
