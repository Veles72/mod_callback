<?php
/**
 * Render Callback button
 *
 * @package    	mod_callback
 * @subpackage 	modules
 * @link http://www.vini-cloud.ru
 * @license freeware
 */
// No direct access 
defined( '_JEXEC' ) or die( 'Restricted access' );
// Get the list of five star movies   
$href = JRoute::_(JURI::base().'index.php?option=com_callback');
$src = 'media/com_callback/images/callback-200x200.png';
?>
<div style="width: 200px; height: 187px; overflow: hidden">
<a href="<?php echo $href ?>"><img src="<?php echo $src ?>"/></a>
</div>