<?php
// created: 2019-07-31 17:12:07
$dictionary["qtk_negocio_securitygroups_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'qtk_negocio_securitygroups_1' => 
    array (
      'lhs_module' => 'qtk_negocio',
      'lhs_table' => 'qtk_negocio',
      'lhs_key' => 'id',
      'rhs_module' => 'SecurityGroups',
      'rhs_table' => 'securitygroups',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'qtk_negocio_securitygroups_1_c',
      'join_key_lhs' => 'qtk_negocio_securitygroups_1qtk_negocio_ida',
      'join_key_rhs' => 'qtk_negocio_securitygroups_1securitygroups_idb',
    ),
  ),
  'table' => 'qtk_negocio_securitygroups_1_c',
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
      'name' => 'qtk_negocio_securitygroups_1qtk_negocio_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'qtk_negocio_securitygroups_1securitygroups_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'qtk_negocio_securitygroups_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'qtk_negocio_securitygroups_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'qtk_negocio_securitygroups_1qtk_negocio_ida',
        1 => 'qtk_negocio_securitygroups_1securitygroups_idb',
      ),
    ),
  ),
);