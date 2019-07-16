<?php
$popupMeta = array (
    'moduleMain' => 'qtk_cupon_juego',
    'varName' => 'qtk_cupon_juego',
    'orderBy' => 'qtk_cupon_juego.name',
    'whereClauses' => array (
  'numero_unico_c' => 'qtk_cupon_juego_cstm.numero_unico_c',
  'tipo_evento_c' => 'qtk_cupon_juego.tipo_evento_c',
  'valor_c' => 'qtk_cupon_juego_cstm.valor_c',
  'estado_c' => 'qtk_cupon_juego_cstm.estado_c',
),
    'searchInputs' => array (
  4 => 'numero_unico_c',
  5 => 'tipo_evento_c',
  6 => 'valor_c',
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
  'valor_c' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_VALOR',
    'width' => '10%',
    'name' => 'valor_c',
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
