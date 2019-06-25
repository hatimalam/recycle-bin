<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not a valid entry point');

class RB_AppHookClass
{
    public function afterDelete($bean, $event, $arguments)
    {
        $GLOBALS['log']->fatal("Event is: ".$event);
        $GLOBALS['log']->fatal("Module is: ".$bean->module_dir);
        $rb_bean = BeanFactory::newBean("hats_Recycle_Bin");
        $rb_bean->name = "{$bean->name} - deleted";
        $rb_bean->related_bean = $bean->module_dir;
        $rb_bean->related_bean_id = $bean->id;
        $rb_bean->save();
    }
}
