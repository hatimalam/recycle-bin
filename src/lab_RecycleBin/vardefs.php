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

$dictionary['lab_RecycleBin'] = array(
    'table' => 'lab_recyclebin',
    'audited' => true,
    'favorites' => false,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'related_to' => 
  array (
    'required' => false,
    'name' => 'related_to',
    'vname' => 'LBL_RELATED_TO',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => 'Parent module name to which the current record is related to',
    'help' => '',
    'importable' => 'false',
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
    'len' => '100',
    'size' => '20',
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => false,
    'full_text_search' => false,
    'ignore_templates' => array(
        'taggable',
        'following',
        'favorite',
    ),
);

if (!class_exists('VardefManager')){
}
VardefManager::createVardef('lab_RecycleBin','lab_RecycleBin', array('basic','assignable'));