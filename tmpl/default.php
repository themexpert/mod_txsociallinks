<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="mod-txlinks<?php echo $moduleclass_sfx ?>">
	<?php if($params->get('show_label', 1)): ?>
		<h3 class="text-msg"><?php echo $text; ?></h3>
	<?php endif; ?>
	<ul class="list-inline inline" style="font-size:<?php echo $params->get('font_size') ?>">
		<?php foreach ($lists as $key => $value): ?>
			<li>
				<a href="<?php echo $value['links']; ?>" class="link-set">
					<i class="<?php echo $value['icon']; ?>"></i> 
					<?php if($params->get('show_icon_label', 1)): ?>
						<?php echo $value['label']; ?>
					<?php endif; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>

</div>
