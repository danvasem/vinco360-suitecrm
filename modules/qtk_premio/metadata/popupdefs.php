<?php
$popupMeta = array (
    'moduleMain' => 'qtk_premio',
    'varName' => 'qtk_premio',
    'orderBy' => 'qtk_premio.name',
    'whereClauses' => array (
  'name' => 'qtk_premio.name',
  'id_premio_c' => 'qtk_premio_cstm.id_premio_c',
  'description' => 'qtk_premio.description',
  'estado_c' => 'qtk_premio_cstm.estado_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'id_premio_c',
  5 => 'description',
  6 => 'estado_c',
),
    'searchdefs' => array (
  'id_premio_c' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ID_PREMIO',
    'width' => '10%',
    'name' => 'id_premio_c',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description',
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
  'ID_PREMIO_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_ID_PREMIO',
    'width' => '5%',
    'name' => 'id_premio_c',
  ),
  'NOMBRE_UNICO_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NOMBRE_UNICO',
    'width' => '33%',
    'name' => 'nombre_unico_c',
  ),
  'ESTADO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '15%',
    'name' => 'estado_c',
  ),
  'VALOR_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_VALOR',
    'width' => '15%',
    'name' => 'valor_c',
  ),
),
);
