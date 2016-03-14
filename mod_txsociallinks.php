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
$app  = JFactory::getApplication();

$text         		= $params->get('text', '');
$show_label   		= $params->get('show_label', 0);
$json         		= $params->get('list_labels');
$list_labels  		= json_decode($json, true);
$load_font_awosome  = $params->get('load_font_awosome', 0);

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$lists = ModTxSocialLinksHelper::group_by_key($list_labels);

if($load_font_awosome)
{
	$document = JFactory::getDocument();
	$document->addStyleSheet(JURI::root().'media/mod_txsociallinks/fontawesome/css/font-awesome.min.css');
}

require JModuleHelper::getLayoutPath('mod_txsociallinks', $params->get('layout', 'default'));
