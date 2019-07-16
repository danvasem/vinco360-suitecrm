<?php
// created: 2019-06-22 05:22:55
$dictionary["qtk_partida"]["fields"]["contacts_qtk_partida_1"] = array (
  'name' => 'contacts_qtk_partida_1',
  'type' => 'link',
  'relationship' => 'contacts_qtk_partida_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_QTK_PARTIDA_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_qtk_partida_1contacts_ida',
);
$dictionary["qtk_partida"]["fields"]["contacts_qtk_partida_1_name"] = array (
  'name' => 'contacts_qtk_partida_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_QTK_PARTIDA_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_qtk_partida_1contacts_ida',
  'link' => 'contacts_qtk_partida_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["qtk_partida"]["fields"]["contacts_qtk_partida_1contacts_ida"] = array (
  'name' => 'contacts_qtk_partida_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_qtk_partida_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_QTK_PARTIDA_1_FROM_QTK_PARTIDA_TITLE',
);
