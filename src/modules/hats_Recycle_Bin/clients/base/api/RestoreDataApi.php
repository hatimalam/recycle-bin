<?php

/**
 * Custom API to restore the deleted data
 * Written by: hatimalam@gmail.com
 * Last Modified: 2nd Aug, 2019
 */

class RestoreDataApi extends ModuleApi
{
    public function registerApiRest()
    {
        $api= array (
            'restoreData' => array(
                'reqType' => 'POST',
                'path' => array('hats_Recycle_Bin', '?', 'restore'),
                'pathVars' => array('','rbId',''),
                'method' => 'restoreData',
                'shortHelp' => 'Restore deleted data back to CRM',
                'longHelp' => '',
            ),
        );
        return $api;
    }

    /**
     * This method handles the /hats_Recycle_Bin/:id/restore REST endpoint
     *
     * @param ServiceBase $api The API class of the request, used in cases where the API changes how the fields are pulled from the args array.
     * @param array $args The arguments array passed in from the API
     * @return array Worksheet data entries
     * @throws SugarApiExceptionNotAuthorized
     */
    public function restoreData(ServiceBase $api, array $args)
    {
        $GLOBALS['log']->fatal("Args: ".print_r($args,true));
        return $args;
    }
}
