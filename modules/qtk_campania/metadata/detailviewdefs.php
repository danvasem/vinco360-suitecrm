<?php
$module_name = 'qtk_campania';
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
          1 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        2 => 
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
        3 => 
        array (
          0 => 'description',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'aplica_todos_locales_c',
            'label' => 'LBL_APLICA_TODOS_LOCALES',
          ),
          1 => 
          array (
            'name' => 'qtk_negocio_qtk_campania_1_name',
            'label' => 'LBL_QTK_NEGOCIO_QTK_CAMPANIA_1_FROM_QTK_NEGOCIO_TITLE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
