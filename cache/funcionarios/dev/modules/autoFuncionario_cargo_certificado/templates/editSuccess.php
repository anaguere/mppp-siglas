<?php use_helper('I18N', 'Date') ?>
<?php include_partial('funcionario_cargo_certificado/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Funcionario cargo certificado', array(), 'messages') ?></h1>

  <?php include_partial('funcionario_cargo_certificado/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('funcionario_cargo_certificado/form_header', array('funcionarios_funcionario_cargo_certificado' => $funcionarios_funcionario_cargo_certificado, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('funcionario_cargo_certificado/form', array('funcionarios_funcionario_cargo_certificado' => $funcionarios_funcionario_cargo_certificado, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('funcionario_cargo_certificado/form_footer', array('funcionarios_funcionario_cargo_certificado' => $funcionarios_funcionario_cargo_certificado, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
