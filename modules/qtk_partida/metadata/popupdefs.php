<?php
$popupMeta = array (
    'moduleMain' => 'qtk_partida',
    'varName' => 'qtk_partida',
    'orderBy' => 'qtk_partida.name',
    'whereClauses' => array (
  'numero_unico_c' => 'qtk_partida_cstm.numero_unico_c',
  'campania_c' => 'qtk_partida.campania_c',
  'negocio_c' => 'qtk_partida.negocio_c',
  'estado_c' => 'qtk_partida_cstm.estado_c',
),
    'searchInputs' => array (
  4 => 'numero_unico_c',
  5 => 'campania_c',
  6 => 'negocio_c',
  7 => 'estado_c',
),
    'searchdefs' => array (
  'numero_unico_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NUMERO_UNICO',
    'width' => '10%',
    'name' => 'numero_unico_c',
  ),
  'campania_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CAMPANIA',
    'id' => 'QTK_CAMPANIA_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'campania_c',
  ),
  'negocio_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_NEGOCIO',
    'id' => 'QTK_NEGOCIO_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'negocio_c',
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
