<?php
$module_name = 'qtk_codigo_cliente';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'codigo_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CODIGO',
        'width' => '10%',
        'name' => 'codigo_c',
      ),
    ),
    'advanced_search' => 
    array (
      'codigo_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CODIGO',
        'width' => '10%',
        'name' => 'codigo_c',
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
