<?php
/**
 * Helper class for Field Plugger module
 * 
 * @package    Field Plugger
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_fieldplugger is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class ModFieldDataHelper
{
    /**
     * Outputs HTML with the field data filled into the user template
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getFieldData($params)
    {
        // Retrieve the various parameters
        $fields = $params->get('fields');
        $tablehtml = $params->get('tablehtml');

        // Go through the list of field names and replace each {fieldname} in the user-provided HTML.
        for ($i = 1; $i <= 10; $i++)
        {
            $tablehtml = html_entity_decode(str_replace("{field$i}",$params->get("field$i"),$tablehtml),ENT_QUOTES);
        }

        // Return the table with all fieldname substitutions made
        return $tablehtml;
    }
}
?>