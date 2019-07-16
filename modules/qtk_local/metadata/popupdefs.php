<?php
$popupMeta = array (
    'moduleMain' => 'qtk_local',
    'varName' => 'qtk_local',
    'orderBy' => 'qtk_local.name',
    'whereClauses' => array (
  'name' => 'qtk_local.name',
  'direccion_c' => 'qtk_local_cstm.direccion_c',
  'local_fisico_c' => 'qtk_local_cstm.local_fisico_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'direccion_c',
  5 => 'local_fisico_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'direccion_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DIRECCION',
    'width' => '10%',
    'name' => 'direccion_c',
  ),
  'local_fisico_c' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_LOCAL_FISICO',
    'width' => '10%',
    'name' => 'local_fisico_c',
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
  'DIRECCION_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DIRECCION',
    'width' => '10%',
    'name' => 'direccion_c',
  ),
  'LOCAL_FISICO_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_LOCAL_FISICO',
    'width' => '10%',
    'name' => 'local_fisico_c',
  ),
),
);
