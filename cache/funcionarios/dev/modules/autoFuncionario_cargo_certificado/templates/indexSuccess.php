<?php use_helper('I18N', 'Date') ?>
<?php include_partial('funcionario_cargo_certificado/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Certificados Electronicos del funcionario en el cargo', array(), 'messages') ?></h1>

  <?php include_partial('funcionario_cargo_certificado/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('funcionario_cargo_certificado/list_header', array('pager' => $pager)) ?>
  </div>


  <div id="sf_admin_content">
    <?php include_partial('funcionario_cargo_certificado/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('funcionario_cargo_certificado/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('funcionario_cargo_certificado/list_actions', array('helper' => $helper)) ?>
    </ul>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('funcionario_cargo_certificado/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
