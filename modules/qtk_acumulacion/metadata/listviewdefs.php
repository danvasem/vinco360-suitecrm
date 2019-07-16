<?php
$module_name = 'qtk_acumulacion';
$listViewDefs [$module_name] = 
array (
  'CONTACTS_QTK_ACUMULACION_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_QTK_ACUMULACION_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_QTK_ACUMULACION_1CONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'NUMERO_UNICO_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NUMERO_UNICO',
    'width' => '15%',
  ),
  'FECHA_ACUMULACION_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_ACUMULACION',
    'width' => '20%',
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
  'ESTADO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '20%',
  ),
  'VALOR_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_VALOR',
    'width' => '10%',
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
