<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<div id="system">

	<?php if ($this->params->get('show_page_title', 1)) : ?>
	<h1 class="title"><?php echo $this->escape($this->params->get('page_title')); ?></h1>
	<?php endif; ?>

	<?php if ($this->category->description || $this->category->image) :?>

		<?php if ($this->params->get('image') != -1 && $this->params->get('image') != '') : ?>
		<div class="description">
			<img src="<?php echo $this->baseurl .'/'. 'images/stories' . '/'. $this->params->get('image'); ?>" alt="<?php echo JText::_('Contacts'); ?>" class="size-auto align-<?php echo $this->params->get('image_align'); ?>" />
			<?php if ($this->category->description) echo $this->category->description; ?>
		</div>
		<?php elseif ($this->category->image) : ?>
		<div class="description">
			<img src="<?php echo $this->baseurl .'/'. 'images/stories' . '/'. $this->category->image; ?>" alt="<?php echo JText::_('Contacts'); ?>" clas="size-auto align-<?php echo $this->category->image_position; ?>" />
			<?php if ($this->category->description) echo $this->category->description; ?>
		</div>
		<?php endif; ?>
		
	<?php endif; ?>

	<?php echo $this->loadTemplate('items'); ?>

</div>
