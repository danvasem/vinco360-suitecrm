<?php
$module_name = 'qtk_partida';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CONTACTS_QTK_PARTIDA_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_QTK_PARTIDA_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_QTK_PARTIDA_1CONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'NEGOCIO_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_NEGOCIO',
    'id' => 'QTK_NEGOCIO_ID_C',
    'link' => true,
    'width' => '30%',
  ),
  'FECHA_CREACION_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_CREACION',
    'width' => '10%',
  ),
  'PROGRESO_C' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_PROGRESO',
    'width' => '10%',
  ),
  'VALOR_ALCANZADO_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_VALOR_ALCANZADO',
    'width' => '10%',
  ),
  'ESTADO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'CAMPANIA_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CAMPANIA',
    'id' => 'QTK_CAMPANIA_ID_C',
    'link' => true,
    'width' => '40%',
  ),
  'VALOR_CLIENTE_C' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_VALOR_CLIENTE',
    'width' => '10%',
  ),
  'REPETICION_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_REPETICION',
    'width' => '10%',
  ),
  'FECHA_FIN_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => false,
    'label' => 'LBL_FECHA_FIN',
    'width' => '10%',
  ),
  'NUMERO_UNICO_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NUMERO_UNICO',
    'width' => '10%',
  ),
);
;
?>
