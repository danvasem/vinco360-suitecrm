<?php
$module_name = 'qtk_local';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ID_LOCAL_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_ID_LOCAL',
    'width' => '10%',
  ),
  'QTK_NEGOCIO_QTK_LOCAL_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_QTK_NEGOCIO_QTK_LOCAL_1_FROM_QTK_NEGOCIO_TITLE',
    'id' => 'QTK_NEGOCIO_QTK_LOCAL_1QTK_NEGOCIO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'NOMBRE_UNICO_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NOMBRE_UNICO',
    'width' => '10%',
  ),
  'DIRECCION_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DIRECCION',
    'width' => '10%',
  ),
  'LOCAL_FISICO_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_LOCAL_FISICO',
    'width' => '10%',
  ),
);
;
?>
