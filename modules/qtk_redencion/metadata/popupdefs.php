<?php
$popupMeta = array (
    'moduleMain' => 'qtk_redencion',
    'varName' => 'qtk_redencion',
    'orderBy' => 'qtk_redencion.name',
    'whereClauses' => array (
  'numero_unico_c' => 'qtk_redencion_cstm.numero_unico_c',
  'tipo_evento_c' => 'qtk_redencion.tipo_evento_c',
  'monto_referencial_c' => 'qtk_redencion_cstm.monto_referencial_c',
  'fecha_redencion_c' => 'qtk_redencion_cstm.fecha_redencion_c',
  'valor_c' => 'qtk_redencion_cstm.valor_c',
),
    'searchInputs' => array (
  4 => 'numero_unico_c',
  5 => 'tipo_evento_c',
  6 => 'monto_referencial_c',
  7 => 'fecha_redencion_c',
  8 => 'valor_c',
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
  'monto_referencial_c' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_MONTO_REFERENCIAL',
    'width' => '10%',
    'name' => 'monto_referencial_c',
  ),
  'fecha_redencion_c' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_REDENCION',
    'width' => '10%',
    'name' => 'fecha_redencion_c',
  ),
  'valor_c' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_VALOR',
    'width' => '10%',
    'name' => 'valor_c',
  ),
),
);
