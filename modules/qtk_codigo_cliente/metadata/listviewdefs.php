<?php
$module_name = 'qtk_codigo_cliente';
$listViewDefs [$module_name] = 
array (
  'CODIGO_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CODIGO',
    'width' => '20%',
  ),
  'FECHA_CREACION_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_CREACION',
    'width' => '20%',
  ),
  'ESTADO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
);
;
?>
