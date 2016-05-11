<?php

/**
 * correlativos module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage correlativos
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCorrelativosGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'correspondencia_unidad_correlativo' : 'correspondencia_unidad_correlativo_'.$action;
  }
}
