<?php
$module_name = 'qtk_cliente_negocio_calificacion';
$listViewDefs [$module_name] = 
array (
  'CONTACTS_QTK_CLIENTE_NEGOCIO_CALIFICACION_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_QTK_CLIENTE_NEGOCIO_CALIFICACION_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_QTK_CLIENTE_NEGOCIO_CALIFICACION_1CONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'FECHA_CALIFICACION_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_CALIFICACION',
    'width' => '10%',
  ),
  'CALIFICACION_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_CALIFICACION',
    'width' => '10%',
  ),
);
;
?>