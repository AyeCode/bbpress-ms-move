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

_e( 'This will retain the post ids and be non destructive, please create a new blank site with bbpress installed', 'bbpress-ms-move' );

$bbp_copy = new Bbpress_Ms_Move_Copy();
echo '####';//.$this->get_version();
//echo '####'.$this->get_version;
_e( 'Select a blog to copy from:', 'bbpress-ms-move' );

echo $bbp_copy->blogs_dropdown( 'bbpress_copy_from' );

?>
<div>
	<ul id="bbpc-functions">
		<?php echo $bbp_copy->output_settings($bbp_copy->delete_actions());?>
	</ul>
</div>


<p class="submit">
	<span name="bbpress_copy" id="bbpress_delete" class="button-primary button-red">Delete bbPress</span>
</p>
