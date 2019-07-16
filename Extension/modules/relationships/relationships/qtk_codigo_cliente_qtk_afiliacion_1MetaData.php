<?php
// created: 2019-06-22 06:01:52
$dictionary["qtk_codigo_cliente_qtk_afiliacion_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'qtk_codigo_cliente_qtk_afiliacion_1' => 
    array (
      'lhs_module' => 'qtk_codigo_cliente',
      'lhs_table' => 'qtk_codigo_cliente',
      'lhs_key' => 'id',
      'rhs_module' => 'qtk_afiliacion',
      'rhs_table' => 'qtk_afiliacion',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'qtk_codigo_cliente_qtk_afiliacion_1_c',
      'join_key_lhs' => 'qtk_codigo_cliente_qtk_afiliacion_1qtk_codigo_cliente_ida',
      'join_key_rhs' => 'qtk_codigo_cliente_qtk_afiliacion_1qtk_afiliacion_idb',
    ),
  ),
  'table' => 'qtk_codigo_cliente_qtk_afiliacion_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'qtk_codigo_cliente_qtk_afiliacion_1qtk_codigo_cliente_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'qtk_codigo_cliente_qtk_afiliacion_1qtk_afiliacion_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'qtk_codigo_cliente_qtk_afiliacion_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'qtk_codigo_cliente_qtk_afiliacion_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'qtk_codigo_cliente_qtk_afiliacion_1qtk_codigo_cliente_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'qtk_codigo_cliente_qtk_afiliacion_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'qtk_codigo_cliente_qtk_afiliacion_1qtk_afiliacion_idb',
      ),
    ),
  ),
);