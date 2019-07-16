<?php
$module_name = 'qtk_local';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'direccion_c',
            'label' => 'LBL_DIRECCION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'local_fisico_c',
            'label' => 'LBL_LOCAL_FISICO',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'latitud_c',
            'label' => 'LBL_LATITUD',
          ),
          1 => 
          array (
            'name' => 'longitud_c',
            'label' => 'LBL_LONGITUD',
          ),
        ),
      ),
    ),
  ),
);
;
?>
