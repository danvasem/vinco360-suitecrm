<?php
$popupMeta = array (
    'moduleMain' => 'qtk_reverso',
    'varName' => 'qtk_reverso',
    'orderBy' => 'qtk_reverso.name',
    'whereClauses' => array (
  'numero_unico_c' => 'qtk_reverso_cstm.numero_unico_c',
  'tipo_evento_c' => 'qtk_reverso.tipo_evento_c',
  'usuario_responsable_c' => 'qtk_reverso.usuario_responsable_c',
  'estado_c' => 'qtk_reverso_cstm.estado_c',
),
    'searchInputs' => array (
  4 => 'numero_unico_c',
  5 => 'tipo_evento_c',
  6 => 'usuario_responsable_c',
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
  'usuario_responsable_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_USUARIO_RESPONSABLE',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'usuario_responsable_c',
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
