<?php
$module_name = 'qtk_afiliacion';
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
            'name' => 'numero_unico_c',
            'label' => 'LBL_NUMERO_UNICO',
          ),
          1 => 
          array (
            'name' => 'tipo_evento_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_EVENTO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fecha_afiliacion_c',
            'label' => 'LBL_FECHA_AFILIACION',
          ),
          1 => 
          array (
            'name' => 'valor_c',
            'label' => 'LBL_VALOR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'usuario_responsable_c',
            'studio' => 'visible',
            'label' => 'LBL_USUARIO_RESPONSABLE',
          ),
          1 => 
          array (
            'name' => 'estado_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tipo_codigo_cliente_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_CODIGO_CLIENTE',
          ),
          1 => 
          array (
            'name' => 'codigo_cliente_c',
            'label' => 'LBL_CODIGO_CLIENTE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'camapania_c',
            'studio' => 'visible',
            'label' => 'LBL_CAMAPANIA',
          ),
          1 => 
          array (
            'name' => 'puntos_ganados_c',
            'label' => 'LBL_PUNTOS_GANADOS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'estrellas_ganados_c',
            'label' => 'LBL_ESTRELLAS_GANADOS',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
