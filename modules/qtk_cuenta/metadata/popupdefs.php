<?php
$popupMeta = array (
    'moduleMain' => 'qtk_cuenta',
    'varName' => 'qtk_cuenta',
    'orderBy' => 'qtk_cuenta.name',
    'whereClauses' => array (
  'numero_unico_c' => 'qtk_cuenta_cstm.numero_unico_c',
  'saldo_disponible_c' => 'qtk_cuenta_cstm.saldo_disponible_c',
  'fecha_apertura_c' => 'qtk_cuenta_cstm.fecha_apertura_c',
  'estado_c' => 'qtk_cuenta_cstm.estado_c',
),
    'searchInputs' => array (
  4 => 'numero_unico_c',
  5 => 'saldo_disponible_c',
  6 => 'fecha_apertura_c',
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
  'saldo_disponible_c' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_SALDO_DISPONIBLE',
    'width' => '10%',
    'name' => 'saldo_disponible_c',
  ),
  'fecha_apertura_c' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_APERTURA',
    'width' => '10%',
    'name' => 'fecha_apertura_c',
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
