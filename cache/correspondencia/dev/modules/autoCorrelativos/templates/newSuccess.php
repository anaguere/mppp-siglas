<?php use_helper('I18N', 'Date') ?>
<?php include_partial('correlativos/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nuevo correlativo de la Unidad', array(), 'messages') ?></h1>

  <?php include_partial('correlativos/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('correlativos/form_header', array('correspondencia_unidad_correlativo' => $correspondencia_unidad_correlativo, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('correlativos/form', array('correspondencia_unidad_correlativo' => $correspondencia_unidad_correlativo, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('correlativos/form_footer', array('correspondencia_unidad_correlativo' => $correspondencia_unidad_correlativo, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
