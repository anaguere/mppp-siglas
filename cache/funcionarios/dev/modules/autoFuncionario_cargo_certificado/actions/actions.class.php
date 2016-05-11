<?php

require_once(dirname(__FILE__).'/../lib/BaseFuncionario_cargo_certificadoGeneratorConfiguration.class.php');
require_once(dirname(__FILE__).'/../lib/BaseFuncionario_cargo_certificadoGeneratorHelper.class.php');

/**
 * funcionario_cargo_certificado actions.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage funcionario_cargo_certificado
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: actions.class.php 31002 2010-09-27 12:04:07Z Kris.Wallsmith $
 */
abstract class autoFuncionario_cargo_certificadoActions extends sfActions
{
  public function preExecute()
  {
    $this->configuration = new funcionario_cargo_certificadoGeneratorConfiguration();

    if (!$this->getUser()->hasCredential($this->configuration->getCredentials($this->getActionName())))
    {
      $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
    }

    $this->dispatcher->notify(new sfEvent($this, 'admin.pre_execute', array('configuration' => $this->configuration)));

    $this->helper = new funcionario_cargo_certificadoGeneratorHelper();

    parent::preExecute();
  }

  public function executeIndex(sfWebRequest $request)
  {
    // sorting
    if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();
  }


  public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->funcionarios_funcionario_cargo_certificado = $this->form->getObject();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->funcionarios_funcionario_cargo_certificado = $this->form->getObject();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->funcionarios_funcionario_cargo_certificado = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->funcionarios_funcionario_cargo_certificado);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->funcionarios_funcionario_cargo_certificado = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->funcionarios_funcionario_cargo_certificado);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

    if ($this->getRoute()->getObject()->delete())
    {
      $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
    }

    $this->redirect('@funcionarios_funcionario_cargo_certificado');
  }


  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      try {
        $funcionarios_funcionario_cargo_certificado = $form->save();
      } catch (Doctrine_Validator_Exception $e) {

        $errorStack = $form->getObject()->getErrorStack();

        $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ?  's' : null) . " with validation errors: ";
        foreach ($errorStack as $field => $errors) {
            $message .= "$field (" . implode(", ", $errors) . "), ";
        }
        $message = trim($message, ', ');

        $this->getUser()->setFlash('error', $message);
        return sfView::SUCCESS;
      }

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $funcionarios_funcionario_cargo_certificado)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@funcionarios_funcionario_cargo_certificado_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => 'funcionarios_funcionario_cargo_certificado_edit', 'sf_subject' => $funcionarios_funcionario_cargo_certificado));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }


  protected function getPager()
  {
    $pager = $this->configuration->getPager('Funcionarios_FuncionarioCargoCertificado');
    $pager->setQuery($this->buildQuery());
    $pager->setPage($this->getPage());
    $pager->init();

    return $pager;
  }

  protected function setPage($page)
  {
    $this->getUser()->setAttribute('funcionario_cargo_certificado.page', $page, 'admin_module');
  }

  protected function getPage()
  {
    return $this->getUser()->getAttribute('funcionario_cargo_certificado.page', 1, 'admin_module');
  }

  protected function buildQuery()
  {
    $tableMethod = $this->configuration->getTableMethod();
    $query = Doctrine_Core::getTable('Funcionarios_FuncionarioCargoCertificado')
      ->createQuery('a');

    if ($tableMethod)
    {
      $query = Doctrine_Core::getTable('Funcionarios_FuncionarioCargoCertificado')->$tableMethod($query);
    }

    $this->addSortQuery($query);

    $event = $this->dispatcher->filter(new sfEvent($this, 'admin.build_query'), $query);
    $query = $event->getReturnValue();

    return $query;
  }

  protected function addSortQuery($query)
  {
    if (array(null, null) == ($sort = $this->getSort()))
    {
      return;
    }

    if (!in_array(strtolower($sort[1]), array('asc', 'desc')))
    {
      $sort[1] = 'asc';
    }

    $query->addOrderBy($sort[0] . ' ' . $sort[1]);
  }

  protected function getSort()
  {
    if (null !== $sort = $this->getUser()->getAttribute('funcionario_cargo_certificado.sort', null, 'admin_module'))
    {
      return $sort;
    }

    $this->setSort($this->configuration->getDefaultSort());

    return $this->getUser()->getAttribute('funcionario_cargo_certificado.sort', null, 'admin_module');
  }

  protected function setSort(array $sort)
  {
    if (null !== $sort[0] && null === $sort[1])
    {
      $sort[1] = 'asc';
    }

    $this->getUser()->setAttribute('funcionario_cargo_certificado.sort', $sort, 'admin_module');
  }

  protected function isValidSortColumn($column)
  {
    return Doctrine_Core::getTable('Funcionarios_FuncionarioCargoCertificado')->hasColumn($column);
  }
}
