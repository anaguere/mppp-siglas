<?php

/**
 * funcionario_cargo_certificado module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage funcionario_cargo_certificado
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFuncionario_cargo_certificadoGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'funcionarios_funcionario_cargo_certificado' : 'funcionarios_funcionario_cargo_certificado_'.$action;
  }
}
