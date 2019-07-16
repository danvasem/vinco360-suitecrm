<?php
$popupMeta = array (
    'moduleMain' => 'qtk_acumulacion',
    'varName' => 'qtk_acumulacion',
    'orderBy' => 'qtk_acumulacion.name',
    'whereClauses' => array (
  'campania_c' => 'qtk_acumulacion.campania_c',
  'numero_unico_c' => 'qtk_acumulacion_cstm.numero_unico_c',
  'tipo_evento_c' => 'qtk_acumulacion.tipo_evento_c',
  'estrellas_ganados_c' => 'qtk_acumulacion_cstm.estrellas_ganados_c',
  'estado_c' => 'qtk_acumulacion_cstm.estado_c',
),
    'searchInputs' => array (
  4 => 'campania_c',
  5 => 'numero_unico_c',
  6 => 'tipo_evento_c',
  7 => 'estrellas_ganados_c',
  8 => 'estado_c',
),
    'searchdefs' => array (
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
  'numero_unico_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NUMERO_UNICO',
    'width' => '10%',
    'name' => 'numero_unico_c',
  ),
  'tipo_evento_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_TIPO_EVENTO',
    'id' => 'QTK_TIPO_EVENTO_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'tipo_evento_c',
  ),
  'estrellas_ganados_c' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_ESTRELLAS_GANADOS',
    'width' => '10%',
    'name' => 'estrellas_ganados_c',
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
