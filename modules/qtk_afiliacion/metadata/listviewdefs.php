<?php
$module_name = 'qtk_afiliacion';
$listViewDefs [$module_name] = 
array (
  'NUMERO_UNICO_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NUMERO_UNICO',
    'width' => '20%',
  ),
  'FECHA_AFILIACION_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_AFILIACION',
    'width' => '15%',
  ),
  'TIPO_EVENTO_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPO_EVENTO',
    'id' => 'QTK_TIPO_EVENTO_ID_C',
    'link' => true,
    'width' => '15%',
  ),
  'VALOR_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_VALOR',
    'width' => '20%',
  ),
  'ESTADO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '20%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
;
?>
