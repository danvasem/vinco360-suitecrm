<?php
$popupMeta = array (
    'moduleMain' => 'qtk_afiliacion',
    'varName' => 'qtk_afiliacion',
    'orderBy' => 'qtk_afiliacion.name',
    'whereClauses' => array (
  'numero_unico_c' => 'qtk_afiliacion_cstm.numero_unico_c',
  'tipo_evento_c' => 'qtk_afiliacion.tipo_evento_c',
  'estrellas_ganados_c' => 'qtk_afiliacion_cstm.estrellas_ganados_c',
  'valor_c' => 'qtk_afiliacion_cstm.valor_c',
  'estado_c' => 'qtk_afiliacion_cstm.estado_c',
),
    'searchInputs' => array (
  4 => 'numero_unico_c',
  5 => 'tipo_evento_c',
  6 => 'estrellas_ganados_c',
  7 => 'valor_c',
  8 => 'estado_c',
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
  'estrellas_ganados_c' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_ESTRELLAS_GANADOS',
    'width' => '10%',
    'name' => 'estrellas_ganados_c',
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
