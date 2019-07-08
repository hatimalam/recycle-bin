<?php

/** access Recycle Bin module only from Admin page **/
$admin_option_defs = array();

$admin_option_defs['Administration']['recyle_bin'] = array(
    'SugarPortal',
    'LBL_RECYCLE_BIN_MODULE_TITLE',
    'LBL_RECYCLE_BIN_MODULE_DESC',
    'javascript:parent.SUGAR.App.router.navigate("hats_Recycle_Bin", {trigger:true})',
);

$admin_group_header[] = array('LBL_RECYCLE_BIN_HEADER_TITLE', '', false, $admin_option_defs, 'LBL_RECYCLE_BIN_HEADER_DESC');
