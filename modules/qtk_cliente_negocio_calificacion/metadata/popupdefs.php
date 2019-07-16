<?php
$popupMeta = array (
    'moduleMain' => 'qtk_cliente_negocio_calificacion',
    'varName' => 'qtk_cliente_negocio_calificacion',
    'orderBy' => 'qtk_cliente_negocio_calificacion.name',
    'whereClauses' => array (
  'fecha_calificacion_c' => 'qtk_cliente_negocio_calificacion_cstm.fecha_calificacion_c',
  'calificacion_c' => 'qtk_cliente_negocio_calificacion_cstm.calificacion_c',
),
    'searchInputs' => array (
  4 => 'fecha_calificacion_c',
  5 => 'calificacion_c',
),
    'searchdefs' => array (
  'fecha_calificacion_c' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_CALIFICACION',
    'width' => '10%',
    'name' => 'fecha_calificacion_c',
  ),
  'calificacion_c' => 
  array (
    'type' => 'int',
    'label' => 'LBL_CALIFICACION',
    'width' => '10%',
    'name' => 'calificacion_c',
  ),
),
);
