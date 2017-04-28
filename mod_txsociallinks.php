<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$text   			= $params->get('text', '');
$json  				= $params->get('list_labels');
$load_font_awosome  = $params->get('load_font_awosome', 0);
$list_labels 		= json_decode($json, true);
$moduleclass_sfx 	= htmlspecialchars($params->get('moduleclass_sfx'));

if($load_font_awosome)
{
	$document = JFactory::getDocument();
	$document->addStyleSheet(JURI::root().'media/mod_txsociallinks/fontawesome/css/font-awesome.min.css');
}

$lists = ModTxLinksHelper::group_by_key($list_labels);
require JModuleHelper::getLayoutPath('mod_txsociallinks', $params->get('layout', 'default'));
