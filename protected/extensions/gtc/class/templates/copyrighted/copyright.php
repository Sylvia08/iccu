﻿<?php
function param($name)
{
    return Yii::app()->params[$name];
}
echo '<?php'."\n";
?>
/**
 * <?php echo $this->className; ?>  class file.
 *
<?php
$author_email = (param('author-email'))
    ? ' <'.param('author-email').">\n"
    : "\n";;
if (param('author')) echo ' * @author '.param('author').$author_email;
if (param('link')) echo ' * @link '.param('link')."\n";
if (param('copyright')) echo ' * @copyright Copyright &copy; '.param('copyright')."\n";
if (param('license')) echo ' * @license '.param('license')."\n";
?>
 */

/**
<?php echo $this->renderCommentPart(); ?>
 *
<?php
if (param('author')) echo ' * @author '.param('author').$author_email;
if (param('version'))echo ' * @version '.param('version')."\n";
if (param('package')) echo ' * @package '.param('package')."\n";
if (param('since')) echo ' * @since '.param('since')."\n";
?>
 */

