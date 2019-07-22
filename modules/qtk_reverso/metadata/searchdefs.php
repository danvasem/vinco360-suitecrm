<?php
$module_name = 'qtk_reverso';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'contacts_qtk_reverso_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_QTK_REVERSO_1_FROM_CONTACTS_TITLE',
        'id' => 'CONTACTS_QTK_REVERSO_1CONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_qtk_reverso_1_name',
      ),
      'qtk_negocio_qtk_reverso_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_REVERSO_1_FROM_QTK_NEGOCIO_TITLE',
        'id' => 'QTK_NEGOCIO_QTK_REVERSO_1QTK_NEGOCIO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'qtk_negocio_qtk_reverso_1_name',
      ),
      'qtk_local_qtk_reverso_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_LOCAL_QTK_REVERSO_1_FROM_QTK_LOCAL_TITLE',
        'id' => 'QTK_LOCAL_QTK_REVERSO_1QTK_LOCAL_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'qtk_local_qtk_reverso_1_name',
      ),
      'fecha_reverso_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_REVERSO',
        'width' => '10%',
        'name' => 'fecha_reverso_c',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'fecha_reverso_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_REVERSO',
        'width' => '10%',
        'name' => 'fecha_reverso_c',
      ),
      'contacts_qtk_reverso_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_QTK_REVERSO_1_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'CONTACTS_QTK_REVERSO_1CONTACTS_IDA',
        'name' => 'contacts_qtk_reverso_1_name',
      ),
      'qtk_negocio_qtk_reverso_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_REVERSO_1_FROM_QTK_NEGOCIO_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'QTK_NEGOCIO_QTK_REVERSO_1QTK_NEGOCIO_IDA',
        'name' => 'qtk_negocio_qtk_reverso_1_name',
      ),
      'qtk_local_qtk_reverso_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_LOCAL_QTK_REVERSO_1_FROM_QTK_LOCAL_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'QTK_LOCAL_QTK_REVERSO_1QTK_LOCAL_IDA',
        'name' => 'qtk_local_qtk_reverso_1_name',
      ),
      'usuario_responsable_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_USUARIO_RESPONSABLE',
        'id' => 'USER_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'usuario_responsable_c',
      ),
      'reverso_tipo_evento_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_REVERSO_TIPO_EVENTO',
        'id' => 'QTK_TIPO_EVENTO_ID1_C',
        'link' => true,
        'width' => '10%',
        'name' => 'reverso_tipo_evento_c',
      ),
      'reverso_valor_c' => 
      array (
        'type' => 'decimal',
        'default' => true,
        'label' => 'LBL_REVERSO_VALOR',
        'width' => '10%',
        'name' => 'reverso_valor_c',
      ),
      'reverso_fecha_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_REVERSO_FECHA',
        'width' => '10%',
        'name' => 'reverso_fecha_c',
      ),
      'reverso_numero_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_REVERSO_NUMERO',
        'width' => '10%',
        'name' => 'reverso_numero_c',
      ),
      'reverso_premio_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_REVERSO_PREMIO',
        'id' => 'QTK_PREMIO_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'reverso_premio_c',
      ),
      'estado_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'name' => 'estado_c',
      ),
      'tipo_evento_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPO_EVENTO',
        'id' => 'QTK_TIPO_EVENTO_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'tipo_evento_c',
      ),
      'numero_unico_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NUMERO_UNICO',
        'width' => '10%',
        'name' => 'numero_unico_c',
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
