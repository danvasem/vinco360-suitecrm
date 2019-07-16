<?php
$module_name = 'qtk_partida';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
      'syncDetailEditViews' => true,
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
            'name' => 'contacts_qtk_partida_1_name',
            'label' => 'LBL_CONTACTS_QTK_PARTIDA_1_FROM_CONTACTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'negocio_c',
            'studio' => 'visible',
            'label' => 'LBL_NEGOCIO',
          ),
          1 => 
          array (
            'name' => 'campania_c',
            'studio' => 'visible',
            'label' => 'LBL_CAMPANIA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'progreso_c',
            'label' => 'LBL_PROGRESO',
          ),
          1 => 
          array (
            'name' => 'valor_alcanzado_c',
            'label' => 'LBL_VALOR_ALCANZADO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fecha_creacion_c',
            'label' => 'LBL_FECHA_CREACION',
          ),
          1 => 
          array (
            'name' => 'valor_cliente_c',
            'label' => 'LBL_VALOR_CLIENTE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'estado_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'fecha_fin_c',
            'label' => 'LBL_FECHA_FIN',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'repeticion_c',
            'label' => 'LBL_REPETICION',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
