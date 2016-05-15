<?php

require_once '/var/www/html/siglas-mppp/lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  { 
    $sf_datosBasicos = sfYaml::load(sfConfig::get("sf_root_dir")."/config/siglas/datosBasicos.yml");
    sfConfig::set('sf_organismo', $sf_datosBasicos['organismo']['nombre']);
    sfConfig::set('sf_siglas', $sf_datosBasicos['organismo']['siglas']);
    sfConfig::set('sf_dominio', $sf_datosBasicos['conectividad']['dominio']);
    sfConfig::set('sf_rangos_ip', str_replace(' ', '', $sf_datosBasicos['conectividad']['rangos_ip']));
      
    sfConfig::set('sf_firmaElectronica', sfYaml::load(sfConfig::get('sf_root_dir') . "/config/siglas/firmaElectronica.yml"));
    
    sfConfig::set('sf_entorno', '_dev');
    sfConfig::set('sf_app_template_dir', sfConfig::get('sf_root_dir').DIRECTORY_SEPARATOR.'web/templates');
    sfConfig::set('sf_admin_module_web_dir', '..');
    
    sfConfig::set('sf_app_acceso_url', 'siglas-mppp/web/acceso'.sfConfig::get('sf_entorno').'.php/');
    sfConfig::set('sf_app_archivo_url', 'siglas-mppp/web/archivo'.sfConfig::get('sf_entorno').'.php/');
    sfConfig::set('sf_app_organigrama_url', 'siglas-mppp/web/organigrama'.sfConfig::get('sf_entorno').'.php/');
    sfConfig::set('sf_app_correspondencia_url', 'siglas-mppp/web/correspondencia'.sfConfig::get('sf_entorno').'.php/');
    sfConfig::set('sf_app_funcionarios_url', 'siglas-mppp/web/funcionarios'.sfConfig::get('sf_entorno').'.php/');
    sfConfig::set('sf_app_herramientas_url', 'siglas-mppp/web/herramientas'.sfConfig::get('sf_entorno').'.php/');
    sfConfig::set('sf_app_rrhh_url', 'siglas-mppp/web/rrhh'.sfConfig::get('sf_entorno').'.php/');
    sfConfig::set('sf_app_inventario_url', 'siglas-mppp/web/inventario'.sfConfig::get('sf_entorno').'.php/');
    sfConfig::set('sf_app_proveedores_url', 'siglas-mppp/web/proveedores'.sfConfig::get('sf_entorno').'.php/');
    sfConfig::set('sf_app_seguridad_url', 'siglas-mppp/web/seguridad'.sfConfig::get('sf_entorno').'.php/');
    sfConfig::set('sf_app_comunicaciones_url', 'siglas-mppp/web/comunicaciones'.sfConfig::get('sf_entorno').'.php/');
    sfConfig::set('sf_app_vehiculos_url', 'siglas-mppp/web/vehiculos'.sfConfig::get('sf_entorno').'.php/');

    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDependentSelectPlugin');
    $this->enablePlugins('sfJqueryReloadedPlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfOptimizeSchemaPlugin');
    $this->enablePlugins('sfTCPDFPlugin');
    $this->enablePlugins('sfPostgresDoctrinePlugin');
    $this->enablePlugins('sfPhpExcelPlugin');
  }

  public function configureDoctrine(Doctrine_Manager $manager)
  {
    $manager->setAttribute(Doctrine_Core::ATTR_RESULT_CACHE, new Doctrine_Cache_Apc());
    $manager->setAttribute(Doctrine_Core::ATTR_USE_DQL_CALLBACKS, true);
  }
}
