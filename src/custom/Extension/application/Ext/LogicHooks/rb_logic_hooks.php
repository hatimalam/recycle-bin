<?php

$hook_array = array();

$hook_array['after_delete'][] = array(
	99,
	'after delete hook for recycle bin',
	'custom/include/RB_Hooks/RB_AppHook.php',
	'RB_AppHookClass',
	'afterDelete'
);
