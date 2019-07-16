<?php
// created: 2019-06-19 04:02:05
$dictionary["contacts_qtk_codigo_cliente_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_qtk_codigo_cliente_1' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'qtk_codigo_cliente',
      'rhs_table' => 'qtk_codigo_cliente',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_qtk_codigo_cliente_1_c',
      'join_key_lhs' => 'contacts_qtk_codigo_cliente_1contacts_ida',
      'join_key_rhs' => 'contacts_qtk_codigo_cliente_1qtk_codigo_cliente_idb',
    ),
  ),
  'table' => 'contacts_qtk_codigo_cliente_1_c',
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
      'name' => 'contacts_qtk_codigo_cliente_1contacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'contacts_qtk_codigo_cliente_1qtk_codigo_cliente_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'contacts_qtk_codigo_cliente_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'contacts_qtk_codigo_cliente_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_qtk_codigo_cliente_1contacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'contacts_qtk_codigo_cliente_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contacts_qtk_codigo_cliente_1qtk_codigo_cliente_idb',
      ),
    ),
  ),
);