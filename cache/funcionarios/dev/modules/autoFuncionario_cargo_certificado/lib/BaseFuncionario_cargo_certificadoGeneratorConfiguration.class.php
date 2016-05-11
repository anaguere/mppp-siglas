<?php

/**
 * funcionario_cargo_certificado module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage funcionario_cargo_certificado
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFuncionario_cargo_certificadoGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array(  '_save' =>   array(  ),);
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  'anular_certificado' =>   array(    'label' => 'Anular certificado',    'action' => 'anularCertificado',  ),);
  }

  public function getListActions()
  {
    return array(  '_new' =>   array(  ),  'regresar_modulo' =>   array(    'label' => 'Regresar',    'action' => 'regresar',  ),);
  }

  public function getListBatchActions()
  {
    return array();
  }

  public function getListParams()
  {
    return '%%_certificado%% - %%_detalles_tecnicos%% - %%_configuraciones%% - %%_validez%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Certificados Electronicos del funcionario en el cargo';
  }

  public function getEditTitle()
  {
    return 'Edit Funcionario cargo certificado';
  }

  public function getNewTitle()
  {
    return 'Nuevo certificado del funcionario en el cargo';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array(  0 => '_new_certificado',);
  }

  public function getListDisplay()
  {
    return array(  0 => '_certificado',  1 => '_detalles_tecnicos',  2 => '_configuraciones',  3 => '_validez',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'funcionario_cargo_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'certificado' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'detalles_tecnicos' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'configuraciones' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'f_valido_desde' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'f_valido_hasta' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'status' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'id_update' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'id_create' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'ip_update' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'funcionario_cargo_id' => array(),
      'certificado' => array(),
      'detalles_tecnicos' => array(),
      'configuraciones' => array(  'label' => 'Configuraciones de acceso',),
      'f_valido_desde' => array(),
      'f_valido_hasta' => array(),
      'status' => array(),
      'id_update' => array(),
      'id_create' => array(),
      'ip_update' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'funcionario_cargo_id' => array(),
      'certificado' => array(),
      'detalles_tecnicos' => array(),
      'configuraciones' => array(),
      'f_valido_desde' => array(),
      'f_valido_hasta' => array(),
      'status' => array(),
      'id_update' => array(),
      'id_create' => array(),
      'ip_update' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'funcionario_cargo_id' => array(),
      'certificado' => array(),
      'detalles_tecnicos' => array(),
      'configuraciones' => array(),
      'f_valido_desde' => array(),
      'f_valido_hasta' => array(),
      'status' => array(),
      'id_update' => array(),
      'id_create' => array(),
      'ip_update' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'funcionario_cargo_id' => array(),
      'certificado' => array(),
      'detalles_tecnicos' => array(),
      'configuraciones' => array(),
      'f_valido_desde' => array(),
      'f_valido_hasta' => array(),
      'status' => array(),
      'id_update' => array(),
      'id_create' => array(),
      'ip_update' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'funcionario_cargo_id' => array(),
      'certificado' => array(),
      'detalles_tecnicos' => array(),
      'configuraciones' => array(),
      'f_valido_desde' => array(),
      'f_valido_hasta' => array(),
      'status' => array(),
      'id_update' => array(),
      'id_create' => array(),
      'ip_update' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'Funcionarios_FuncionarioCargoCertificadoForm';
  }

  public function hasFilterForm()
  {
    return false;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'Funcionarios_FuncionarioCargoCertificadoFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return 'innerList';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
