<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

JHTML::_('stylesheet', 'poll_bars.css', 'components/com_poll/assets/');

?>

<div id="system">

	<?php if ($this->params->get('show_page_title', 1)) : ?>
	<h1 class="title"><?php echo $this->escape($this->params->get('page_title')); ?></h1>
	<?php endif; ?>

	<form class="box style" action="index.php" method="post" name="poll" id="poll">
	
		<div class="filter">
			<label for="id"><?php echo JText::_('Select Poll'); ?></label>
			<?php echo $this->lists['polls']; ?>
		</div>
		
		<fieldset>
			<legend><?php echo $this->poll->title; ?></legend>
		
			<table cellspacing="0" cellpadding="0" border="0">
			<?php foreach($this->votes as $vote) : ?>
				<tr>
					<td width="100%" colspan="3"><?php echo $vote->text; ?></td>
				</tr>
				<tr>
					<td width="25"><strong><?php echo $vote->hits; ?></strong></td>
					<td width="30"><?php echo $vote->percent; ?>%</td>
					<td width="300"><div class="<?php echo $vote->class; ?>" style="height:<?php echo $vote->barheight; ?>px;width:<?php echo $vote->percent; ?>%"></div></td>
				</tr>
			<?php endforeach; ?>
			</table>
			
		</fieldset>
		
	</form>
	
	<?php echo JText::_( 'Number of Voters' ); ?>: <?php if(isset($this->votes[0])) echo $this->votes[0]->voters; ?>
	<br /><?php echo JText::_( 'First Vote' ); ?>: <?php echo $this->first_vote; ?>
	<br /><?php echo JText::_( 'Last Vote' ); ?>: <?php echo $this->last_vote; ?>

</div>