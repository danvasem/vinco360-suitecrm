<?php
$module_name = 'qtk_log_notificacion_cliente';
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
            'name' => 'fecha_notificacion_c',
            'label' => 'LBL_FECHA_NOTIFICACION',
          ),
          1 => 
          array (
            'name' => 'titulo_c',
            'studio' => 'visible',
            'label' => 'LBL_TITULO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'mensaje_c',
            'studio' => 'visible',
            'label' => 'LBL_MENSAJE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'error_c',
            'studio' => 'visible',
            'label' => 'LBL_ERROR',
          ),
          1 => 
          array (
            'name' => 'canal_c',
            'studio' => 'visible',
            'label' => 'LBL_CANAL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'estado_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
