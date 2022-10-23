<?php
/**
 * Helper class for Value Plugger module
 * 
 * @package    Value Plugger
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_fieldplugger is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
namespace Joomla\Module\ValuePlugger\Site\Helper;

use Joomla\CMS\Factory;

class ModValuePluggerHelper
{
    /**
     * Outputs HTML with the data values filled into the user template
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getDataValue($params)
    {
        // Retrieve the various parameters
        $tablehtml = $params->get('tablehtml');
        $plugs = $params->get('plugs');

        // Go through the list of placeholder names and replace each {fieldname} in the user-provided HTML.
        foreach ($plugs as $plug)
        {
            $tablehtml = html_entity_decode(str_replace("[$plug->placeholder]",$plug->datavalue,$tablehtml),ENT_QUOTES);
        }

        // Return the table with all fieldname substitutions made
        return $tablehtml;
    }
}
?>