<?php
$module_name = 'qtk_cliente_negocio';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CONTACTS_QTK_CLIENTE_NEGOCIO_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_QTK_CLIENTE_NEGOCIO_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_QTK_CLIENTE_NEGOCIO_1CONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_CREACION_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_CREACION',
    'width' => '10%',
  ),
  'QTK_NEGOCIO_QTK_CLIENTE_NEGOCIO_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_QTK_NEGOCIO_QTK_CLIENTE_NEGOCIO_1_FROM_QTK_NEGOCIO_TITLE',
    'id' => 'QTK_NEGOCIO_QTK_CLIENTE_NEGOCIO_1QTK_NEGOCIO_IDA',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
