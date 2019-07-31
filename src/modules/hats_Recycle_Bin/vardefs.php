<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$dictionary['hats_Recycle_Bin'] = array(
    'table' => 'hats_recycle_bin',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'related_bean' => 
  array (
    'required' => false,
    'name' => 'related_bean',
    'vname' => 'LBL_RELATED_BEAN',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'readonly' => true,
    'len' => '60',
    'size' => '20',
  ),
  'related_bean_id' => 
  array (
    'required' => false,
    'name' => 'related_bean_id',
    'vname' => 'LBL_RELATED_BEAN_ID',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'readonly' => true,
    'len' => '50',
    'size' => '20',
  ),
  'is_restore' => 
  array (
    'required' => false,
    'name' => 'is_restore',
    'vname' => 'LBL_IS_RESTORE',
    'type' => 'bool',
    'massupdate' => false,
    'comments' => 'Flag to identify whether a record has been restored or not.',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'default' => 0,
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'readonly' => true,
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
    'full_text_search' => true,
    'acls' => array(
        'SugarACLAdminOnly' => true,
    ),
);

if (!class_exists('VardefManager')){
}
VardefManager::createVardef('hats_Recycle_Bin','hats_Recycle_Bin', array('basic','assignable','taggable'));