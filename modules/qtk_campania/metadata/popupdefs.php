<?php
$popupMeta = array (
    'moduleMain' => 'qtk_campania',
    'varName' => 'qtk_campania',
    'orderBy' => 'qtk_campania.name',
    'whereClauses' => array (
  'name' => 'qtk_campania.name',
  'id_campania_c' => 'qtk_campania_cstm.id_campania_c',
  'estado_c' => 'qtk_campania_cstm.estado_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'id_campania_c',
  6 => 'estado_c',
),
    'searchdefs' => array (
  'id_campania_c' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ID_CAMPANIA',
    'width' => '10%',
    'name' => 'id_campania_c',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'estado_c' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado_c',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'ID_CAMPANIA_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_ID_CAMPANIA',
    'width' => '10%',
    'name' => 'id_campania_c',
  ),
  'QTK_NEGOCIO_QTK_CAMPANIA_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_QTK_NEGOCIO_QTK_CAMPANIA_1_FROM_QTK_NEGOCIO_TITLE',
    'id' => 'QTK_NEGOCIO_QTK_CAMPANIA_1QTK_NEGOCIO_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'qtk_negocio_qtk_campania_1_name',
  ),
  'ESTADO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado_c',
  ),
),
);
