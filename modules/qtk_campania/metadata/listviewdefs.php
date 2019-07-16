<?php
$module_name = 'qtk_campania';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ID_CAMPANIA_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_ID_CAMPANIA',
    'width' => '10%',
  ),
  'QTK_NEGOCIO_QTK_CAMPANIA_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_QTK_NEGOCIO_QTK_CAMPANIA_1_FROM_QTK_NEGOCIO_TITLE',
    'id' => 'QTK_NEGOCIO_QTK_CAMPANIA_1QTK_NEGOCIO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ESTADO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'FECHA_CREACION_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => false,
    'label' => 'LBL_FECHA_CREACION',
    'width' => '25%',
  ),
);
;
?>
