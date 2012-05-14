<?php
/**
 * @version	0.1
 * @package	Mysite
 * @author 	Dioscouri Design
 * @link 	http://www.dioscouri.com
 * @copyright Copyright (C) 2007 Dioscouri Design. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*/

/** ensure this file is being included by a parent file */
defined('_JEXEC') or die('Restricted access');

JLoader::import( 'com_mysite.helpers.item', JPATH_ADMINISTRATOR.DS.'components' );

class MysiteController extends DSCControllerAdmin
{
    /**
    * default view
    */
    public $default_view = 'items';
}

?>