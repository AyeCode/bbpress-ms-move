<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://ayecode.io/
 * @since      1.0.0
 *
 * @package    Bbpress_Ms_Move
 * @subpackage Bbpress_Ms_Move/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
###

<?php

_e( 'This will retain the post ids and be non destructive, please create a new blank site with bbpress installed', 'bbpress-ms-move' );

$bbp_copy = new Bbpress_Ms_Move_Copy();
echo '####';//.$this->get_version();
//echo '####'.$this->get_version;
_e( 'Select a blog to copy from:', 'bbpress-ms-move' );

echo $bbp_copy->blogs_dropdown( 'bbpress_copy_from' );

_e( 'Select a blog to copy to:', 'bbpress-ms-move' );

echo $bbp_copy->blogs_dropdown( 'bbpress_copy_to' );


?>

<div>
	<ul>
		<?php echo $bbp_copy->output_settings($bbp_copy->copy_actions());?>
	</ul>
</div>


<p class="submit">
	<span name="bbpress_copy" id="bbpress_copy" class="button-primary">Copy bbPress</span>
</p>
