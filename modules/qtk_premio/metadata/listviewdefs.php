<?php
$module_name = 'qtk_premio';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'NOMBRE_UNICO_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NOMBRE_UNICO',
    'width' => '33%',
  ),
  'ID_PREMIO_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_ID_PREMIO',
    'width' => '5%',
  ),
  'QTK_NEGOCIO_QTK_PREMIO_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_QTK_NEGOCIO_QTK_PREMIO_1_FROM_QTK_NEGOCIO_TITLE',
    'id' => 'QTK_NEGOCIO_QTK_PREMIO_1QTK_NEGOCIO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VALOR_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_VALOR',
    'width' => '15%',
  ),
  'ESTADO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '15%',
  ),
);
;
?>
