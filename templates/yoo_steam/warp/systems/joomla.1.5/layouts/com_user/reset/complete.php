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
	
	<h1 class="title"><?php echo JText::_('Reset your Password'); ?></h1>
		
	<p><?php echo JText::_('RESET_PASSWORD_COMPLETE_DESCRIPTION'); ?></p>

	<form class="submission small style" action="<?php echo JRoute::_( 'index.php?option=com_user&task=completereset' ); ?>" method="post">
		<fieldset>
			
			<div>
				<label for="password1" class="hasTip" title="<?php echo JText::_('RESET_PASSWORD_PASSWORD1_TIP_TITLE'); ?>::<?php echo JText::_('RESET_PASSWORD_PASSWORD1_TIP_TEXT'); ?>"><?php echo JText::_('Password'); ?>:</label>
				<input id="password1" name="password1" type="password" class="required validate-password" />
			</div>
			
			<div>
				<label for="password2" class="hasTip" title="<?php echo JText::_('RESET_PASSWORD_PASSWORD2_TIP_TITLE'); ?>::<?php echo JText::_('RESET_PASSWORD_PASSWORD2_TIP_TEXT'); ?>"><?php echo JText::_('Verify Password'); ?>:</label>
				<input id="password2" name="password2" type="password" class="required validate-password" />
			</div>
			
			
		</fieldset>
		
		<div>
			<button type="submit"><?php echo JText::_('Submit'); ?></button>
		</div>
			
		<?php echo JHTML::_( 'form.token' ); ?>
	</form>

</div>