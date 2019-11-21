<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of EntradaAdmin
 *
 * @author cenipa
 */


namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\HttpFoundation\RedirectResponse;

use AppBundle\Mailer;

use AppBundle\Entity\RcsvRegistroControle as Registro;

class RcsvEntradaAdmin extends AbstractAdmin {

    //put your code here
    protected $baseRouteName = 'rcsv_entrada_ocorrencia';
    protected $baseRoutePattern = 'page-entrada';
	protected $notificadorNome;
	protected $notificadorEmail;
	public $prazo; 
	protected $objReg;
	public $data;  
	
	
	
	
    
 protected $datagridValues = array(
        '_page' => 1,
        '_sort_order' => 'DESC', // sort direction 
        '_sort_by' => 'cadastroEm' // field name 
    );

    
     public function createQuery($context = 'list')
{
    $query = parent::createQuery($context);
    $query->andWhere(
        $query->expr()->eq($query->getRootAliases()[0]. '.situacaoRcsv', ':my_param')
    );
    $query->setParameter('my_param', 'ENTRADA');
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
								'label' => 'Número do processo'
							)			
							)
							
			->add('publicado', 'checkbox', array(
										'label' => 'Publicado no site?',
										'required' => false
									))
		
							
							
                           ->add('tipoReporte', 'choice', array(
                                    'choices' => array(
                                        'CIVIL' => 'CIVIL',
										'CIVIL - AVIAÇÃO GERAL' => 'CIVIL - AVIAÇÃO GERAL',
										'CIVIL - AVIAÇÃO COMERCIAL REGULAR' => 'CIVIL - AVIAÇÃO COMERCIAL REGULAR',
										'CIVIL - AVIAÇÃO COMERCIAL TAXI AÉREO' => 'CIVIL - AVIAÇÃO COMERCIAL TAXI AÉREO',
										'CIVIL - AVIAÇÃO COMERCIAL OFFSHORE' => 'CIVIL - AVIAÇÃO COMERCIAL OFFSHORE',
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
                        array('label'=>'Selecione a data','dp_language'=>'pt','format'=>'dd/MM/yyyy'
						
                            
                            ))
                
                                ->add('horaLocal')
                               ->add('rcsvHistorico', null, array(
										   'label' => 'Historico', 
										   'attr' => array('style' => 'height:500px')
										  )) 
								->add('rcsvHistoricoResumido', null, array(
										   'label' => 'Historico Resumido (Texto que será publicado no site)', 
										   'attr' => array('style' => 'height:200px')
										  )) 										  
				->add('tipoNotificador')
                                // ->add('ocorrencia' ,'sonata_type_model', array('expanded' => true))
                                

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
					->add('rcsvAprovado', 'choice', array(
                                    'choices' => array(
                                       
                                        
                                        'SIM' => 'SIM',
                                        'NAO' => 'NAO',
										'DENUNCIA' => 'O RELATO É CARACTERIZADO COMO DENÚNCIA'
									    
                            ),			
										'label' => 'Deseja aprovar o Relato?',
										'required'=>true,
										'expanded' => true, 
										'multiple' => false
							))
							
							->add('classificacao')
									
									
									->add('situacaoRcsv', 'choice', array(
                                    'choices' => array(
                                       
                                        
                                        'ENTRADA' => 'CAIXA DE ENTRADA',
										'AGUARDANDO RESPOSTA' => 'AGUARDANDO RESPOSTA',
                                        'ENCERRADO' => 'ARQUIVAR',
										'LIXEIRA' => 'MOVER PARA LIXEIRA',
										'DENUNCIA' => 'DENUNCIA'
                            ),
										'label' => 'Encaminhamento do Relato:',
										'required'=>true,
										'expanded' => true, 
										'multiple' => false
							))

								->add('prioridade', 'choice', array(
                                    'choices' => array(
                                       
                                        
                                        '1' => '1 - 60 dias',
										'2' => '2 - 90 dias',
                                        '3' => '3 - 120 dias',
										'0' => 'Não priorizado'
                            ),
										'label' => 'Prioridade do Relato:',
										'required'=>true,
										'expanded' => true, 
										'multiple' => false
							))
								
								->end()
        		
                                    
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
	
	
	protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->tab('Ocorrência Geral')
                        ->with('Dados Gerais do RCSV', array(
                        'class' => 'col-md-6',
                            'box_class' => 'box box-solid box-primary',
                        'description' => 'Relatório ao Cenipa para Segurança de Voo',
                            // ...
                    ))
                             ->add('situacaoRcsv')
                                ->add('tipoReporte')
                                ->add('cidade')
                                // ->add('cidade', 'entity', array('attr'=>array('data-sonata-select2-allow-clear'=>'true'),'class' => 'AppBundle\Entity\GeografiaCidade'))               
                                ->add('aerodromo')
                                //->add('aerodromo', 'entity', array('attr'=>array('data-sonata-select2-allow-clear'=>'true'),'class' => 'Cenipa\UserBundle\Entity\AerodromoGeral'))
                              ->add('dataOcorrencia')
                
                                ->add('horaLocal')
                                ->add('rcsvHistorico')
                                ->add('tipoNotificador')
                                // ->add('ocorrencia' ,'sonata_type_model', array('expanded' => true))
                                ->add('classificacao')
								 


               
                        ->end()
                                    
                          ->with('Detalhes da Ocorrência', array(
                                    'class' => 'col-md-6',
                                    'box_class' => 'box box-solid box-primary',
                                    'description' => 'Relatório ao Cenipa para Segurança de Voo',
                                        // ...
                                ))
                          
                            ->end()
                ->end()
                
                
                       ->add('nome')
                ->add('cpf')
                ->add('telefone')
                ->add('email')
                ->add('numHabilitacao')
                ->add('orgaoEmpresa')
               

        ;
    }
	
	 

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     *
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper) {
        
		
		
		
		
		$listMapper
				 ->add('numeroRcsv', null,
                  array('template' => 'SonataAdminBundle:CRUD:custom_list_numero_rcsv.html.twig',
						'label' => 'Número do processo'	))
						
				->add('tipoNotificador', null,
                  array('template' => 'SonataAdminBundle:CRUD:custom_list_notificador.html.twig',
						'label' => 'Notificador'	))
				 ->add('horaLocal',null ,array('template' => 'SonataAdminBundle:CRUD:custom_list_classificacao.html.twig',
				 'label' => 'Data/Localidade'
				 ))
              
                ->add('tipoReporte', 'text',array('template' => 'SonataAdminBundle:CRUD:custom_list_tipo_reporte.html.twig'))
				
              
               // ->add('cidade', 'text')
            
                ->add('cadastroEm',null,
                  array('template' => 'SonataAdminBundle:CRUD:custom_list_data_field.html.twig'))
						
						->add('prioridade', 'string', array('template' => 'SonataAdminBundle:CRUD:custom_list.html.twig'))
                
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
        $datagridMapper
		
		
		->add('tipoReporte', 'doctrine_orm_choice', array('label' => 'Tipo reporte (aviação)',
                    'field_options' => array(
                        'required' => false,
                        'choices' => array("CIVIL" => "CIVIL", "ESTRANGEIRA" => "ESTRANGEIRA", "MILITAR" => "MILITAR",
										'CIVIL - AVIAÇÃO REGULAR' => 'CIVIL AVIAÇÃO REGULAR',
										'CIVIL - AVIAÇÃO GERAL' => 'CIVIL AVIAÇÃO GERAL',
						
						)
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


 
	
  
 public function getPrazoRelato($data,$tipo){
	
	if($tipo==1){
    $timestamp = strtotime($data . "+60 days");
    }
    elseif($tipo==2){
    $timestamp = strtotime($data . "+90 days");
    }
    elseif($tipo==3){
    $timestamp = strtotime($data . "+120 days");
    }
    
	  return $timestamp;
	  
  }
  
  public function getDiasReporte(){
	  
	  
	  
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
		
		
		foreach ($object->getOcorrenciaRegistroControle() as $registro) {

            $registro->setOcorrencia($object);
        }
    }

    public function preUpdate($object) {
		
		
		 foreach ($object->getOcorrenciaTipo() as $tipo) {

            $tipo->setOcorrenciaRcsv($object);
        }
        
        
        foreach ($object->getNotificadorOcorrencia() as $notificador) {

            $notificador->setOcorrencia($object);
			$notificadorNome = $notificador->getNome();
			$notificadorEmail = $notificador->getEmail();
        }



        foreach ($object->getOcorrenciaControle() as $controle) {

            $controle->setOcorrencia($object);
        }
		
		
		$aprovado = $object->getRcsvAprovado();
		$situacao = $object->getSituacaoRcsv();
		$tipoReporte = $object->getTipoReporte();
		$dat = $object->getDataOcorrencia();	
		$this->data = $dat;
		$coluna_numero = $object->getNumero();
		$coluna_numero_militar = $object->getNumeroMilitar();
		$emailEnviado = $object->getEmailEnviado();
		$num_rcsv = $object->getNumeroRcsv();
		
	
			$this->objReg = new Registro();
			$this->objReg->setTipoRegistro($aprovado);
			$this->objReg->setOcorrenciaRegistro($object->getId());
			//$this->objReg->setOcorrenciaId($object->getId());

			$this->objReg->setObservacoes($situacao);
			
						
			
			//$em->persist($this->objReg);
			$em = $this->getModelManager()->getEntityManager('AppBundle\Entity\RcsvRegistroControle');
			$em->persist($this->objReg);
			
	
				
	  
		
		
							$date_ocorrencia = json_encode($dat);
									
							$dados = json_decode($date_ocorrencia);
							
							
							$data_convert = explode(" ", $dados->date);
							
							$ano_ocorrencia = explode("-", $data_convert[0]);
							
							$ano_real = (string)$ano_ocorrencia[0];
							
							
			//$object->setNumeroRcsv($coluna_numero.'/RCSV/'.$ano_real);
		
		
		if ($aprovado=='SIM' && $situacao=='ENTRADA' )
		{
					
				$ano = date('Y');
				
				
				
									
				if($tipoReporte == 'CIVIL' || $tipoReporte == 'CIVIL - AVIAÇÃO GERAL' || $tipoReporte == 'CIVIL - AVIAÇÃO COMERCIAL REGULAR' ||   $tipoReporte == 'CIVIL - AVIAÇÃO COMERCIAL TAXI AÉREO' || $tipoReporte == 'CIVIL - AVIAÇÃO COMERCIAL OFFSHORE') {
					
						if($coluna_numero == 0){
					
						$invoices = $this->getModelManager()->getEntityManager('AppBundle\Entity\RcsvOcorrencia')
						
						
						->createQueryBuilder('i')
						
						->select('i.id, i.numero')
						
						->from('AppBundle\Entity\RcsvOcorrencia', 'i')
						
						->Where('i.dataOcorrencia LIKE :ano')
												
						->orderBy('i.numero', 'DESC')						
											
						->setMaxResults(1)
					
						->setParameter('ano', '%'.$ano_real.'%')
										
						->getQuery()
						
						->getResult();
						
				
						$numero_processo = $invoices[0]['numero']+1;
						
						
	
						$limpaZero = ltrim($numero_processo, "0");
							if(strlen($limpaZero)==null || strlen($limpaZero)=='' ||strlen($limpaZero)==1){
								$quantZero = '000';								
							} elseif(strlen($limpaZero)==2){
								$quantZero = '00';
							} elseif(strlen($limpaZero)==3){
								$quantZero = '0';
							} else{
								$quantZero = '';
							}
							
								$object->setNumero($numero_processo);
								
								$object->setNumeroRcsv($quantZero.''.$numero_processo.'/RCSV/'.$ano_real);
								
								$this->getRequest()->getSession()->getFlashBag()->add("mytodo_success", "Relato aprovado! O número do processo gerado é:");
					
						}
						
						elseif($coluna_numero > 0 && $num_rcsv != ''){
							
							$limpaZero = ltrim($coluna_numero, "0");
							if(strlen($limpaZero)==null || strlen($limpaZero)=='' ||strlen($limpaZero)==1){
								$quantZero = '000';								
							} elseif(strlen($limpaZero)==2){
								$quantZero = '00';
							} elseif(strlen($limpaZero)==3){
								$quantZero = '0';
							} else{
								$quantZero = '';
							}
							
							$object->setNumeroRcsv($quantZero.''.$coluna_numero.'/RCSV/'.$ano_real);
					
						}
					
					
					} 
					
		
					if($tipoReporte == 'MILITAR' && $coluna_numero_militar < 1 ){
					
					
						$objMilitar = $this->getModelManager()->getEntityManager('AppBundle\Entity\RcsvOcorrencia')
						
						
						->createQueryBuilder('i')
						
						->select('i.id, i.numeroMilitar')
						
						->from('AppBundle\Entity\RcsvOcorrencia', 'i')
						
						->Where('i.dataOcorrencia LIKE :ano')
												
						->orderBy('i.numeroMilitar', 'DESC')						
											
						->setMaxResults(1)
					
						->setParameter('ano', '%'.$ano_real.'%')
										
						->getQuery()
						
						->getResult();
						
					
						$numero_processo_militar = $objMilitar[0]['numeroMilitar']+1;
						
						
		
						$limpaZero = ltrim($numero_processo_militar, "0");
							if(strlen($limpaZero)==null || strlen($limpaZero)=='' ||strlen($limpaZero)==1){
								$quantZero = '000';								
							} elseif(strlen($limpaZero)==2){
								$quantZero = '00';
							} elseif(strlen($limpaZero)==3){
								$quantZero = '0';
							} else{
								$quantZero = '';
							}
					
							
					$object->setNumeroMilitar($numero_processo_militar);
					
					$object->setNumeroRcsv($quantZero.''.$numero_processo_militar.'/M/RCSV/'.$ano_real);
					
					$this->getRequest()->getSession()->getFlashBag()->add("mytodo_success", "Relato aprovado! O número do processo gerado é:");
				
				
				
				
				}	
					
					
					
		}
				
				
				
				elseif ($aprovado == 'DENUNCIA' ){
				
				
				if($emailEnviado == 0){
				
				$transport = \Swift_MailTransport::newInstance();
				$msg = \Swift_Mailer::newInstance($transport);
				$mailer = new Mailer($msg);
				
				
				$historico = $object->getRcsvHistorico();
				
				$subject = "RELATO AO CENIPA PARA SEGURANÇA DE VOO";
				$to = $notificadorEmail;
				$body = $this->gerarHtmlEmail(  $notificadorNome);
				$mailer->sendEmail($subject, $to, $body);
				$this->getRequest()->getSession()->getFlashBag()->add("mytodo_success", "E-mail com o informe de denúncia enviado com sucesso ao destinatário.");
				$object->setSituacaoRcsv('DENUNCIA');
				
				$object->setEmailEnviado(1);
				
				}
				
				else{
					
					
				$object->setSituacaoRcsv('DENUNCIA');
						
					
				$this->getRequest()->getSession()->getFlashBag()->add("mytodo_success", "Não foi necessário enviar email ao destinatário.");
				
				}
			
				
				
		}

        
    }
	
	
	
	
	
	
	
	
	
	public function gerarHtmlEmail( $nome){
		
		//$data_ocorrencia = (string)$data;
		
        $html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <!-- Facebook sharing information tags -->
        <meta property="og:title" content="Confirmação de reporte" />

        <title>CENIPA RCSV - NOTIFICAÇÃO DE RELATO</title>
        <style type="text/css">
            /* Client-specific Styles */
            #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" button. */
            body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
            body{-webkit-text-size-adjust:none;} /* Prevent Webkit platforms from changing default text sizes. */

            /* Reset Styles */
            body{margin:0; padding:0;}
            img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
            table td{border-collapse:collapse;}
            #backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}


            body, #backgroundTable{
                /*@editable*/ background-color:#FAFAFA;
            }
			
			a:hover{
				color:blue;
			}

            /**
            * @tab Page
            * @section email border
            * @tip Set the border for your email.
            */
            #templateContainer{
                /*@editable*/ border: 1px solid #DDDDDD;
            }

            /**
            * @tab Page
            * @section heading 1
            * @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
            * @style heading 1
            */
            h1, .h1{
                /*@editable*/ color:#202020;
                display:block;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:34px;
                /*@editable*/ font-weight:bold;
                /*@editable*/ line-height:100%;
                margin-top:0;
                margin-right:0;
                margin-bottom:10px;
                margin-left:0;
                /*@editable*/ text-align:left;
            }

            /**
            * @tab Page
            * @section heading 2
            * @tip Set the styling for all second-level headings in your emails.
            * @style heading 2
            */
            h2, .h2{
                /*@editable*/ color:#202020;
                display:block;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:30px;
                /*@editable*/ font-weight:bold;
                /*@editable*/ line-height:100%;
                margin-top:0;
                margin-right:0;
                margin-bottom:10px;
                margin-left:0;
                /*@editable*/ text-align:left;
            }

            /**
            * @tab Page
            * @section heading 3
            * @tip Set the styling for all third-level headings in your emails.
            * @style heading 3
            */
            h3, .h3{
                /*@editable*/ color:#202020;
                display:block;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:26px;
                /*@editable*/ font-weight:bold;
                /*@editable*/ line-height:100%;
                margin-top:0;
                margin-right:0;
                margin-bottom:10px;
                margin-left:0;
                /*@editable*/ text-align:left;
            }

            /**
            * @tab Page
            * @section heading 4
            * @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
            * @style heading 4
            */
            h4, .h4{
                /*@editable*/ color:#202020;
                display:block;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:22px;
                /*@editable*/ font-weight:bold;
                /*@editable*/ line-height:100%;
                margin-top:0;
                margin-right:0;
                margin-bottom:10px;
                margin-left:0;
                /*@editable*/ text-align:left;
            }


            #templateHeader{
                /*@editable*/ background-color:#FFFFFF;
                /*@editable*/ border-bottom:0;
            }


            .headerContent{
                /*@editable*/ color:#202020;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:34px;
                /*@editable*/ font-weight:bold;
                /*@editable*/ line-height:100%;
                /*@editable*/ padding:0;
                /*@editable*/ text-align:center;
                /*@editable*/ vertical-align:middle;
            }


            .headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
                /*@editable*/ color:#336699;
                /*@editable*/ font-weight:normal;
                /*@editable*/ text-decoration:underline;
            }

            #headerImage{
                height:auto;
                max-width:600px !important;
            }



            #templateContainer, .bodyContent{
                /*@editable*/ background-color:#FFFFFF;
            }

            .bodyContent div{
                /*@editable*/ color:#505050;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:14px;
                /*@editable*/ line-height:150%;
                /*@editable*/ text-align:left;
            }

            .bodyContent div a:link, .bodyContent div a:visited, /* Yahoo! Mail Override */ .bodyContent div a .yshortcuts /* Yahoo! Mail Override */{
                /*@editable*/ color:#336699;
                /*@editable*/ font-weight:normal;
                /*@editable*/ text-decoration:underline;
            }


            .templateButton{
                -moz-border-radius:3px;
                -webkit-border-radius:3px;
                /*@editable*/ background-color:#336699;
                /*@editable*/ border:0;
                border-collapse:separate !important;
                border-radius:3px;
            }


            .templateButton, .templateButton a:link, .templateButton a:visited, /* Yahoo! Mail Override */ .templateButton a .yshortcuts /* Yahoo! Mail Override */{
                /*@editable*/ color:#FFFFFF;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:15px;
                /*@editable*/ font-weight:bold;
                /*@editable*/ letter-spacing:-.5px;
                /*@editable*/ line-height:100%;
                text-align:center;
                text-decoration:none;
            }

            .bodyContent img{
                display:inline;
                height:auto;
            }



            #templateFooter{
                /*@editable*/ background-color:#FFFFFF;
                /*@editable*/ border-top:0;
            }



            .footerContent div{
                /*@editable*/ color:#707070;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:12px;
                /*@editable*/ line-height:125%;
                /*@editable*/ text-align:center;
            }


            .footerContent div a:link, .footerContent div a:visited, /* Yahoo! Mail Override */ .footerContent div a .yshortcuts /* Yahoo! Mail Override */{
                /*@editable*/ color:#336699;
                /*@editable*/ font-weight:normal;
                /*@editable*/ text-decoration:underline;
            }

            .footerContent img{
                display:inline;
            }


            #utility{
                /*@editable*/ background-color:#FFFFFF;
                /*@editable*/ border:0;
            }

			.std_content01 a:link{
				color: #fff;
			}
            #utility div{
                /*@editable*/ text-align:center;
            }

            #monkeyRewards img{
                max-width:190px;
            }
			a{ color: #fff }
			a:link {color: #fff}
			a:visited {color: #fff}
			a:hover {color: #fff}
			
			.tablecustom td{
				border-bottom: 1px #ccc solid;
			}
        </style>
    </head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
        <center>
            <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">
                <tr>
                    <td align="center" valign="top" style="padding-top:20px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">
                            <tr>
                                <td align="center" valign="top">
                                    <!-- // Begin Template Header \\ -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader">
                                        <tr>
                                            <td class="headerContent">

                                                <!-- // Begin Module: Standard Header Image \\ -->
                                                <img src="http://www.potter.net.br:8080/Public/Images/logo_rcsv.png" style="max-width:600px;" />
                                                <!-- // End Module: Standard Header Image \\ -->

                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Header \\ -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <!-- // Begin Template Body \\ -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">
                                        <tr>
                                            <td valign="top">

                                                <!-- // Begin Module: Standard Content \\ -->
                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td valign="top" class="bodyContent">
                                                          <div class="std_content00">
                                                                <h4 class="h4">RELATO AO CENIPA PARA SEGURANÇA DE VOO</h4>
                                                            
									

<table width="100%" class="tablecustom">
<tr>
<td></td>
<td></td><br>
</tr>
<tr>

</tr>
<tr>

<td>
<p>Prezado Sr(a).</p>
<p>O CENIPA agradece a sua participação através do Programa de Reporte Voluntário do Sistema de Investigação e Prevenção de Acidentes Aeronáuticos (SIPAER). Esperamos continuar contando com a sua importante participação para tornar a aviação brasileira cada vez mais segura.</p>
<p>Após análises técnicas, o seu relato foi caracterizado como uma denúncia, uma vez que o seu conteúdo trata de violação da regulamentação em vigor, contravenção penal ou crime relacionado à atividade aérea.</p>
<p>De acordo com as legislações em vigor do SIPAER, o CENIPA não pode utilizar uma ferramenta de prevenção, neste caso específico, o RCSV, para tratar de assuntos dessa natureza.</p>
<p>Dessa forma, solicitamos a gentileza de encaminhar o seu relato à Agência Nacional de Aviação Civil (ANAC), órgão regulador e fiscalizador da aviação civil brasileira, <a href="http://www2.anac.gov.br/arus/focus/faleconosco/validarUsuario.asp">clicando aqui.</a></p>

<p>Muito Obrigado!</p>

<p><b>CENTRO DE INVESTIGAÇÃO E PREVENÇÃO DE ACIDENTES AERONÁUTICOS - CENIPA</b></p>
<p><b>Seção de Reportes Voluntários - SRV</b></p>
<p><b>SHIS QI 05, Área Especial 12, Lago Sul, Brasília-DF, CEP: 7161-600. Tel: +55 061 3364-8838 / 3364-8849</b></p>
</td>
</tr>
</table>



                                                              </strong>.</p>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    
                                                </table>
                                                <!-- // End Module: Standard Content \\ -->

                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Body \\ -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <!-- // Begin Template Footer \\ -->
                                    <table border="0" cellpadding="10" cellspacing="0" width="600" id="templateFooter">
                                        <tr>
                                            <td valign="top" class="footerContent">

                                                <!-- // Begin Module: Transactional Footer \\ -->
                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tr><div class="std_utility">
                                                        <td align="center" valign="top">Subdivisão de Tecnologia da Informação - SDTI. CENIPA.</td>
                                                        </div>
                                                    </tr>
                                                    <tr>
                                                        <td valign="middle" id="utility">
                                                            <div class="std_utility">
                                                               <p></p>
                                                                <p>Atenção: está é uma mensagem automática, favor não responder!</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Transactional Footer \\ -->

                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Footer \\ -->
                                </td>
                            </tr>
                        </table>
                        <br />
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>



';
	return $html;
	}
    
}
