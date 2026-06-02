<?php
/*
Plugin Name: NEX-Forms ADD ON - Super Select
Plugin URI: https://basixonline.net/nex-forms/pricing/
Description: Use 2000+ Icons to create your own custom Radio, Check, Dropdown and Spinner selects. <strong>Requires at least: <a href="https://basixonline.net/nex-forms/pricing/?utm_source=nex-forms-add-on&utm_medium=mailchimp&utm_content=plugins-page" target="_blank" style="display:block">NEX-Forms v9.x</a></strong>
Author: Basix
Version: 9.1
Text Domain: nex-forms-super-select-add-on
License: GPLv3 or later
*/

if ( ! defined( 'ABSPATH' ) ) exit;

function NEXForms_not_found_notice_ss() {

	if ( function_exists( 'NEXForms_ui_output' ) ) {
		return;
	}

	?>
	<div class="notice notice-error">
		<p>
			<strong>
				<?php
				echo esc_html__(
					'NEX-Forms Core not installed.',
					'nex-forms-super-select-add-on'
				);
				?>
			</strong>

			<?php
			echo esc_html__(
				'You need the NEX-Forms core plugin to use this add-on.',
				'nex-forms-super-select-add-on'
			);
			?>

			<a href="<?php echo esc_url( 'https://basixonline.net/nex-forms/pricing/' ); ?>" target="_blank" rel="noopener noreferrer">
				<?php
				echo esc_html__(
					'Get NEX-Forms',
					'nex-forms-super-select-add-on'
				);
				?>
			</a>
		</p>
	</div>
	<?php
}
add_action( 'admin_notices', 'NEXForms_not_found_notice_ss' );



function nf_super_select_field_settings(){
	$output = '';

	$output .= '<div class="setting-wrapper settings-icon-field">';	
		$output .= '<div role="group" class="btn-group set-icon-colums">';
			$output .= '<small>Layout</small>';
			$output .= '<button class="btn btn-default waves-effect waves-light title="Inline" type="button"><span class="glyphicon glyphicon-arrow-right"></span></button>
						<button class="btn btn-default waves-effect waves-light 1c" type="button" title="1 Column"><span class="glyphicon glyphicon-arrow-down"></span></button>
						<button class="btn btn-default waves-effect waves-light 2c" type="button" title="2 Columns">2c</button>
						<button class="btn btn-default waves-effect waves-light 3c" type="button" title="3 Columns">3c</button>
						<button class="btn btn-default waves-effect waves-light 4c" type="button" title="4 Columns">4c</button>
						<button class="btn btn-default waves-effect waves-light 6c" type="button" title="6 Columns">6c</button>';
		$output .= '</div>';
		
		$output .= '<div role="group" class="btn-group align-input-container">';
						$output .= '<small>Alignment</small>';
						$output .= '<button class="btn btn-default waves-effect waves-light left" type="button" title="Left"><i class="fa fa-align-left"></i></button>';
						$output .= '<button class="btn btn-default waves-effect waves-light center" type="button" title="Center"><i class="fa fa-align-center"></i></button>';
						$output .= '<button class="btn btn-default waves-effect waves-light right" type="button" title="Right"><i class="fa fa-align-right"></i></button>';
					$output .= '</div>';
		
		$output .= '<h4>Overall Option Setup &amp; Styling</h4>';
		$output .= '<div role="group" class="btn-group">';
			
			
			$output .= '<small>Icons</small>';
				
			$output .= '<div class="input-group input-group-sm">';	
				$output .= '<span class="input-group-addon group-addon-label">OFF</span><span class="input-group-addon action-btn current_field_icon_off_overall icon-select" data-icon-target=".off-icon span"><i class=""><span class="small_addon_text">Icon</span></i></span><span class="input-group-addon  action-btn color-picker"><input type="text" class="form-control icon-field-icon-off-color-overall" name="icon-field-icon-off-color-overall" id="bs-color"></span>';
				$output .= '<span class="input-group-addon group-addon-label">ON</span><span class="input-group-addon action-btn current_field_icon_on_overall icon-select" data-icon-target=".on-icon span"><i class=""><span class="small_addon_text">Icon</span></i></span><span class="input-group-addon  action-btn color-picker"><input type="text" class="form-control icon-field-icon-on-color-overall" name="icon-field-icon-on-color-overall" id="bs-color"></span>';

				$output .= '<span class="settings-add-on-group">';
				$output .= '<span class="settings-add-on-text">Size</span>';
				$output .= '<input name="icon_field_icon_size" id="icon_field_icon_size" class="form-control" value="30">';
				$output .= '</span>';

				$output .= '<select name="icon_field_on_animation" id="icon_field_on_animation" class="form-control" data-selected="flipInY">
								<option value="no_animation">= Set Animation =</option>
								<option value="flipInY">Default</option>
										  <option value="bounce">bounce</option>
										  <option value="bounceIn">bounceIn</option>
										  <option value="flash">flash</option>
										  <option value="fadeIn">fadeIn</option>
										  <option value="flip">flip</option>
										  <option value="flipInX">flipInX</option>
										  <option value="flipInY" selected="selected">flipInY</option>
										  <option value="jello">jello</option>
										  <option value="pulse">pulse</option>
										  <option value="rotateIn">rotateIn</option>
										  <option value="rubberBand">rubberBand</option>
										  <option value="shake">shake</option>
										  <option value="swing">swing</option>
										  <option value="tada">tada</option>
										  <option value="wobble">wobble</option>
										  <option value="zoomIn">zoomIn</option>
								</select>
							';
			$output .= '</div>';
		$output .= '</div>';
		
		
		
		
		
		
		
		$output .= '<div role="group" class="btn-group">';
			$output .= '<small>Labels</small>';
				
			$output .= '<div class="input-group input-group-sm">';	
				$output .= '<span class="input-group-addon group-addon-label">Off</span><span class="input-group-addon  action-btn color-picker"><input type="text" class="form-control icon-field-label-off-color-overall" name="icon-field-label-off-color-overall" id="bs-color"></span>';
				$output .= '<span class="input-group-addon action-btn off-icon-label-bold" title="Bold">';
					$output .= '<span class="fa fa-bold"></span>';
				$output .= '</span>';
				$output .= '<span class="input-group-addon group-addon-label">On</span><span class="input-group-addon  action-btn color-picker"><input type="text" class="form-control icon-field-label-on-color-overall" name="icon-field-label-on-color-overall" id="bs-color"></span>';
				$output .= '<span class="input-group-addon action-btn on-icon-label-bold" title="Bold">';
					$output .= '<span class="fa fa-bold"></span>';
				$output .= '</span>';	
				$output .= '<input name="icon_field_label_size" id="icon_field_label_size" class="form-control" value="15">';
				
				$output .= '<span class="input-group-addon action-btn icon-labels-position icon-label-hidden" data-set-class="icon-label-hidden"  title="Icon Labels Hidden"><span class="fa fa-eye-slash"></span></span>';
				$output .= '<span class="input-group-addon action-btn icon-labels-position icon-label-tip" data-set-class="icon-label-tip"  title="Icon Labels Tooltip"><span class="fas fa-comment-alt"></span></span>';
				$output .= '<span class="input-group-addon action-btn icon-labels-position icon-label-right" data-set-class="icon-label-right"  title="Icon Labels Right"><span class="fa fa-chevron-right"></span></span>';
				$output .= '<span class="input-group-addon action-btn icon-labels-position icon-label-top" data-set-class="icon-label-top"  title="Icon Labels Top"><span class="fa fa-chevron-up"></span></span>';
				$output .= '<span class="input-group-addon action-btn icon-labels-position icon-label-bottom" data-set-class="icon-label-bottom"  title="Icon Labels Bottom"><span class="fa fa-chevron-down"></span></span>';
				$output .= '<span class="input-group-addon action-btn icon-labels-position icon-label-left" data-set-class="icon-label-left"  title="Icon Labels Left"><span class="fa fa-chevron-left"></span></span>';
				
				
			$output .= '</div>';
		$output .= '</div>';

		$output .= '<h4>Individual Option Setup &amp; Styling</h4>';
		
		$output .= '<div role="group" class="icon-selection">';
		$output .= '</div><div style="clear:both;"></div>';
		
		$output .= '<div role="group" class="input-group input-group-sm single-icon-settings cloneable">';

			$output .= '<span class="input-group-addon group-addon-label">Off</span><span class="input-group-addon action-btn current_field_icon_off" data-icon-target=""><i class="">Icon</i></span><span class="input-group-addon  action-btn color-picker"><input type="text" class="form-control icon-field-icon-off-color" name="icon-field-icon-off-color" id="bs-color"></span>';
			$output .= '<span class="input-group-addon group-addon-label">On</span><span class="input-group-addon action-btn current_field_icon_on" data-icon-target=""><i class="">Icon</i></span><span class="input-group-addon  action-btn color-picker"><input type="text" class="form-control icon-field-icon-on-color" name="icon-field-icon-on-color" id="bs-color"></span>';
			$output .= '<span class="settings-add-on-group"><span class="settings-add-on-text">Val</span><input type="text" class="form-control" name="set_icon_value" id="set_icon_value"  placeholder="Set Value"></span>';
			$output .= '<span class="settings-add-on-group"><span class="settings-add-on-text">Tip</span><input type="text" class="form-control" name="set_icon_tooltip" id="set_icon_tooltip"  placeholder="Set Tooltip"></span>';
			
			$output .= '<span class="duplicate_delete">
							<span class="delete_icon fa fa-close" title="Delete Icon"></span>
							<span class="duplicate_icon fa fa-files-o" title="Duplicate Icon"></span>
						</span>';

		$output .= '</div>';

	$output .= '</div>';
return $output;
}