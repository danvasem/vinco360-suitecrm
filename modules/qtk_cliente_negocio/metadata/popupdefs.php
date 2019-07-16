<?php
$popupMeta = array (
    'moduleMain' => 'qtk_cliente_negocio',
    'varName' => 'qtk_cliente_negocio',
    'orderBy' => 'qtk_cliente_negocio.name',
    'whereClauses' => array (
  'name' => 'qtk_cliente_negocio.name',
  'fecha_creacion_c' => 'qtk_cliente_negocio_cstm.fecha_creacion_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'fecha_creacion_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'fecha_creacion_c' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_CREACION',
    'width' => '10%',
    'name' => 'fecha_creacion_c',
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
  'FECHA_CREACION_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_CREACION',
    'width' => '30%',
  ),
),
);
