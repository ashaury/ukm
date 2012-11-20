<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// get template id/path
$id     = JRequest::getCmd('id');
$config = JPATH_ROOT."/templates/{$id}/config.php";

if (file_exists($config)) {

	// load template config
	require_once($config);

	// trigger save config
	$warp = Warp::getInstance();
	$warp['system']->saveConfig();	

}