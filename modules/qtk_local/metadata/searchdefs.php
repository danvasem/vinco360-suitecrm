<?php
$module_name = 'qtk_local';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'direccion_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_DIRECCION',
        'width' => '10%',
        'name' => 'direccion_c',
      ),
      'local_fisico_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_LOCAL_FISICO',
        'width' => '10%',
        'name' => 'local_fisico_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
