<td class="sf_admin_text sf_admin_list_td_certificado">
  <?php echo get_partial('funcionario_cargo_certificado/certificado', array('type' => 'list', 'funcionarios_funcionario_cargo_certificado' => $funcionarios_funcionario_cargo_certificado)) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_detalles_tecnicos">
  <?php echo get_partial('funcionario_cargo_certificado/detalles_tecnicos', array('type' => 'list', 'funcionarios_funcionario_cargo_certificado' => $funcionarios_funcionario_cargo_certificado)) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_configuraciones">
  <?php echo get_partial('funcionario_cargo_certificado/configuraciones', array('type' => 'list', 'funcionarios_funcionario_cargo_certificado' => $funcionarios_funcionario_cargo_certificado)) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_validez">
  <?php echo get_partial('funcionario_cargo_certificado/validez', array('type' => 'list', 'funcionarios_funcionario_cargo_certificado' => $funcionarios_funcionario_cargo_certificado)) ?>
</td>
