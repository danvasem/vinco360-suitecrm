<?php
$popupMeta = array (
    'moduleMain' => 'qtk_campania',
    'varName' => 'qtk_campania',
    'orderBy' => 'qtk_campania.name',
    'whereClauses' => array (
  'name' => 'qtk_campania.name',
  'id_campania_c' => 'qtk_campania_cstm.id_campania_c',
  'fecha_creacion_c' => 'qtk_campania_cstm.fecha_creacion_c',
  'estado_c' => 'qtk_campania_cstm.estado_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'id_campania_c',
  5 => 'fecha_creacion_c',
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
  'fecha_creacion_c' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_CREACION',
    'width' => '10%',
    'name' => 'fecha_creacion_c',
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
);
