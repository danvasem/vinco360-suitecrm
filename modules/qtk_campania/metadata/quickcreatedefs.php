<?php
$module_name = 'qtk_campania';
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
          0 => 
          array (
            'name' => 'id_campania_c',
            'label' => 'LBL_ID_CAMPANIA',
          ),
          1 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'estado_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fecha_inicio_c',
            'label' => 'LBL_FECHA_INICIO',
          ),
          1 => 
          array (
            'name' => 'fecha_fin_c',
            'label' => 'LBL_FECHA_FIN',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'aplica_todos_locales_c',
            'label' => 'LBL_APLICA_TODOS_LOCALES',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
