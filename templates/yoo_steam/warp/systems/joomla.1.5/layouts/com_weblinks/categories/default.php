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

	<?php if ((($this->params->def('image', -1) != -1) && isset($this->image)) || ($this->params->get('show_comp_description', 1) && $this->params->get('comp_description'))) : ?>
	<div class="description">
		<?php if ($this->params->get('image') && isset($this->image)) echo $this->image; ?>
		<?php if ($this->params->get('show_comp_description', 1)) echo $this->params->get('comp_description'); ?>
	</div>
	<?php endif; ?>

	<ul>
		<?php foreach ($this->categories as $category) : ?>
		<li>
			<a href="<?php echo $category->link; ?>"><?php echo $this->escape($category->title);?></a>
			<small>(<?php echo $category->numlinks;?>)</small>
		</li>
		<?php endforeach; ?>
	</ul>

</div>