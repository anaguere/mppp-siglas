<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_certificado">
  <?php if ('certificado' == $sort[0]): ?>
    <?php echo link_to(__('Certificado', array(), 'messages'), '@funcionarios_funcionario_cargo_certificado', array('query_string' => 'sort=certificado&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Certificado', array(), 'messages'), '@funcionarios_funcionario_cargo_certificado', array('query_string' => 'sort=certificado&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_detalles_tecnicos">
  <?php if ('detalles_tecnicos' == $sort[0]): ?>
    <?php echo link_to(__('Detalles tecnicos', array(), 'messages'), '@funcionarios_funcionario_cargo_certificado', array('query_string' => 'sort=detalles_tecnicos&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Detalles tecnicos', array(), 'messages'), '@funcionarios_funcionario_cargo_certificado', array('query_string' => 'sort=detalles_tecnicos&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_configuraciones">
  <?php if ('configuraciones' == $sort[0]): ?>
    <?php echo link_to(__('Configuraciones de acceso', array(), 'messages'), '@funcionarios_funcionario_cargo_certificado', array('query_string' => 'sort=configuraciones&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Configuraciones de acceso', array(), 'messages'), '@funcionarios_funcionario_cargo_certificado', array('query_string' => 'sort=configuraciones&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_validez">
  <?php echo __('Validez', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>