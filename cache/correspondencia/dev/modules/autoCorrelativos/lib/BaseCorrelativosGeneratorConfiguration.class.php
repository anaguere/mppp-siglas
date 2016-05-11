<?php

/**
 * correlativos module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage correlativos
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCorrelativosGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array();
  }

  public function getListParams()
  {
    return '%%descripcion%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Correlativos de la Unidad';
  }

  public function getEditTitle()
  {
    return 'Editar correlativo de la Unidad %%descripcion%%';
  }

  public function getNewTitle()
  {
    return 'Nuevo correlativo de la Unidad';
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
    return array(  'Grupo de' =>   array(    0 => '_unidad_correlativo',  ),  'Identificación' =>   array(    0 => 'nomenclador',    1 => 'letra',    2 => 'secuencia',    3 => 'compartido',  ),  'Asociación' =>   array(    0 => '_formatos',  ),);
  }

  public function getNewDisplay()
  {
    return array(  'Grupo de' =>   array(    0 => '_unidad_correlativo',  ),  'Identificación' =>   array(    0 => 'nomenclador',    1 => 'letra',    2 => 'secuencia',    3 => 'compartido',  ),  'Asociación' =>   array(    0 => '_formatos',  ),);
  }

  public function getListDisplay()
  {
    return array(  0 => 'descripcion',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'unidad_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'descripcion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Descripción',  'help' => 'Ingrese un nombre con el que pueda identificar este correlativo Ejm = Oficio; Memorandum; Generico',),
      'letra' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Letra',  'help' => 'Ingrese una letra con la que pueda relacionar el correlativo a su descripción Ejm = Oficio -> O; Memorandum -> M; Generico -> G. ó dejelo en blanco si no lo va a utilizar',),
      'ultimo_correlativo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nomenclador' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'help' => 'Seleccione el nomenclador mas adecuado a lo que necesita',),
      'secuencia' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Iniciar en',  'help' => 'Indique el primer número con el que comenzara a enviar la correspondencia',),
      'compartido' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',  'help' => 'Seleccione si desea compartir este correlativo con otras unidades a los que pertenezca como firmante',),
      'tipo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'status' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'id_update' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'unidad_id' => array(),
      'descripcion' => array(),
      'letra' => array(),
      'ultimo_correlativo' => array(),
      'nomenclador' => array(),
      'secuencia' => array(  'label' => 'Secuencia',),
      'compartido' => array(),
      'tipo' => array(),
      'status' => array(),
      'id_update' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'unidad_id' => array(),
      'descripcion' => array(),
      'letra' => array(),
      'ultimo_correlativo' => array(),
      'nomenclador' => array(),
      'secuencia' => array(),
      'compartido' => array(),
      'tipo' => array(),
      'status' => array(),
      'id_update' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'unidad_id' => array(),
      'descripcion' => array(),
      'letra' => array(),
      'ultimo_correlativo' => array(),
      'nomenclador' => array(),
      'secuencia' => array(),
      'compartido' => array(),
      'tipo' => array(),
      'status' => array(),
      'id_update' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'unidad_id' => array(),
      'descripcion' => array(),
      'letra' => array(),
      'ultimo_correlativo' => array(),
      'nomenclador' => array(),
      'secuencia' => array(),
      'compartido' => array(),
      'tipo' => array(),
      'status' => array(),
      'id_update' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'unidad_id' => array(),
      'descripcion' => array(),
      'letra' => array(),
      'ultimo_correlativo' => array(),
      'nomenclador' => array(),
      'secuencia' => array(),
      'compartido' => array(),
      'tipo' => array(),
      'status' => array(),
      'id_update' => array(),
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
    return 'Correspondencia_UnidadCorrelativoForm';
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
    return 'Correspondencia_UnidadCorrelativoFormFilter';
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
