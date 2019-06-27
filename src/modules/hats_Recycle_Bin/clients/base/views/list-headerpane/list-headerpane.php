<?php

//remove create button from the list headerpane
$viewdefs['hats_Recycle_Bin']['base']['view']['list-headerpane'] = array(
    'template' => 'headerpane',
    'buttons' => array(
        array(
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
        ),
    ),
);
