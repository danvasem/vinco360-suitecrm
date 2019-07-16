<?php
$popupMeta = array (
    'moduleMain' => 'qtk_tipo_evento',
    'varName' => 'qtk_tipo_evento',
    'orderBy' => 'qtk_tipo_evento.name',
    'whereClauses' => array (
  'name' => 'qtk_tipo_evento.name',
  'id_tipo_evento_c' => 'qtk_tipo_evento_cstm.id_tipo_evento_c',
  'description' => 'qtk_tipo_evento.description',
  'estado_c' => 'qtk_tipo_evento_cstm.estado_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'id_tipo_evento_c',
  5 => 'description',
  6 => 'estado_c',
),
    'searchdefs' => array (
  'id_tipo_evento_c' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ID_TIPO_EVENTO',
    'width' => '10%',
    'name' => 'id_tipo_evento_c',
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
);
