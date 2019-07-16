<?php
// created: 2019-06-22 05:56:55
$dictionary["qtk_local_qtk_cupon_juego_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'qtk_local_qtk_cupon_juego_1' => 
    array (
      'lhs_module' => 'qtk_local',
      'lhs_table' => 'qtk_local',
      'lhs_key' => 'id',
      'rhs_module' => 'qtk_cupon_juego',
      'rhs_table' => 'qtk_cupon_juego',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'qtk_local_qtk_cupon_juego_1_c',
      'join_key_lhs' => 'qtk_local_qtk_cupon_juego_1qtk_local_ida',
      'join_key_rhs' => 'qtk_local_qtk_cupon_juego_1qtk_cupon_juego_idb',
    ),
  ),
  'table' => 'qtk_local_qtk_cupon_juego_1_c',
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
      'name' => 'qtk_local_qtk_cupon_juego_1qtk_local_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'qtk_local_qtk_cupon_juego_1qtk_cupon_juego_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'qtk_local_qtk_cupon_juego_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'qtk_local_qtk_cupon_juego_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'qtk_local_qtk_cupon_juego_1qtk_local_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'qtk_local_qtk_cupon_juego_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'qtk_local_qtk_cupon_juego_1qtk_cupon_juego_idb',
      ),
    ),
  ),
);