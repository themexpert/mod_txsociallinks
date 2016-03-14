<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$text = '';
if($show_label){
  $text .= '<span class="text-msg">'.$text.'</span>';
}

$msg = '';
foreach ($lists as $key => $value) {
  $msg .= '<a class="icon-set" href="'.$value['link'].'" target="_blank">';
  $msg .= '<i class="'.$value['icon'].'"></i>';
  if($show_label){
    $msg .= $value['label'];
  }
  $msg .= '</a> ';
}
?>
<div class="mod-txsociallinks<?php echo $moduleclass_sfx ?>">
<p>
  <?php echo $text .' '. $msg;?>
</p>
</div>
