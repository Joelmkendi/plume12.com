<?php
$group_color = 'Color';
$group_team  = 'Team Member';
$group_space = 'Spacing';

// Shortcode settings
return array(
	'name'   => esc_html__( 'Team Members', 'penci-framework' ),
	'weight' => 828,
	'params' => array_merge(
		Penci_Framework_Shortcode_Params::block_title(),
		Penci_Framework_Shortcode_Params::block_option_block_title(),
		array(
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Design style', 'penci-framework' ),
				'param_name' => '_design_style',
				'std'        => 's1',
				'value'      => array(
					esc_html__( 'Style 1', 'penci-framework' ) => 's1',
					esc_html__( 'Style 2', 'penci-framework' ) => 's2',
					esc_html__( 'Style 3', 'penci-framework' ) => 's3',
				)
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Columns', 'penci-framework' ),
				'param_name' => 'columns',
				'value'      => array(
					__( '1 Column', 'penci-framework' )  => 'column-1',
					__( '2 Columns', 'penci-framework' ) => 'columns-2',
					__( '3 Columns', 'penci-framework' ) => 'columns-3',
					__( '4 Columns', 'penci-framework' ) => 'columns-4',
				),
				'std'        => 'columns-3'
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'height_team',
				'heading'          => esc_html__( 'Set height team member', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
			),array(
				'type'             => 'penci_number',
				'param_name'       => 'border_width_team',
				'heading'          => esc_html__( 'Set border width team member', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'wh_img',
				'heading'          => esc_html__( 'Set width and height for Image', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
			),
			array(
				'type'       => 'checkbox',
				'heading'    => __( 'Make about image circle', 'penci-framework' ),
				'param_name' => 'image_circle',
			),
			array(
				'type'       => 'checkbox',
				'heading'    => __( 'Turn on uppercase name for team member', 'penci-framework' ),
				'param_name' => 'on_upper_name',
			),
			array(
				'type'       => 'checkbox',
				'heading'    => __( 'Turn on uppercase position for team member', 'penci-framework' ),
				'param_name' => 'on_upper_pos',
			),
			array(
				'type'       => 'checkbox',
				'heading'    => __( 'Disable background', 'penci-framework' ),
				'param_name' => 'dis_bg_block',
			),
			array(
				'type'       => 'param_group',
				'heading'    => '',
				'param_name' => 'team_members',
				'group'      => $group_team,
				'value' => urlencode( json_encode( array(
					array(
						'name'       => 'Team member 1',
						'desc'         => 'I am text block. Click edit button to change this text.',
						'link_website' => '#',
						'link_google' => '#'
					),
					array(
						'name'       => 'Team member 2',
						'desc'         => 'I am text block. Click edit button to change this text.',
						'link_website' => '#',
						'link_google' => '#'
					),
					array(
						'name'       => 'Team member 3',
						'desc'         => 'I am text block. Click edit button to change this text.',
						'link_website' => '#',
						'link_google' => '#'
					),
				) ) ),
				'params'     => array(
					array(
						'type'        => 'attach_image',
						'heading'     => __( 'Image', 'penci-framework' ),
						'param_name'  => 'image',
						'value'       => '',
						'description' => __( 'Select image from media library.', 'penci-framework' ),
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Name', 'penci-framework' ),
						'param_name'  => 'name',
						'admin_label' => true,
					),
					array(
						'type' => 'textfield',
						'heading'     => __( 'Position', 'penci-framework' ),
						'param_name'  => 'position',
					),
					array(
						'type' => 'textarea',
						'heading'     => __( 'Description', 'penci-framework' ),
						'param_name'  => 'desc',
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Link Website', 'penci-framework' ),
						'param_name'  => 'link_website',
						'edit_field_class' => 'vc_col-sm-6',
					),array(
						'type'        => 'textfield',
						'heading'     => __( 'Link Facebook', 'penci-framework' ),
						'param_name'  => 'link_facebook',
						'edit_field_class' => 'vc_col-sm-6',
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Link Google', 'penci-framework' ),
						'param_name'  => 'link_google',
						'edit_field_class' => 'vc_col-sm-6',
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Link Twitter', 'penci-framework' ),
						'param_name'  => 'link_twitter',
						'edit_field_class' => 'vc_col-sm-6',
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Link Linkedin', 'penci-framework' ),
						'param_name'  => 'link_linkedin',
						'edit_field_class' => 'vc_col-sm-6',
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Link Instagram', 'penci-framework' ),
						'param_name'  => 'link_instagram',
						'edit_field_class' => 'vc_col-sm-6',
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Link Youtube', 'penci-framework' ),
						'param_name'  => 'link_youtube',
						'edit_field_class' => 'vc_col-sm-6',
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Link Vimeo', 'penci-framework' ),
						'param_name'  => 'link_vimeo',
						'edit_field_class' => 'vc_col-sm-6',
					),array(
						'type'        => 'textfield',
						'heading'     => __( 'Link Pinterest', 'penci-framework' ),
						'param_name'  => 'link_pinterest',
						'edit_field_class' => 'vc_col-sm-6',
					),array(
						'type'        => 'textfield',
						'heading'     => __( 'Link Dribbble', 'penci-framework' ),
						'param_name'  => 'link_dribbble',
						'edit_field_class' => 'vc_col-sm-6',
					),
				),
			),

			// Spacing
			array(
				'type'             => 'penci_number',
				'param_name'       => 'item_member_ptop',
				'heading'          => esc_html__( 'Custom padding top for team member', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'group'            => $group_space,
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'item_member_pbottom',
				'heading'          => esc_html__( 'Custom padding bottom for team member', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'group'            => $group_space,
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'item_member_pleft',
				'heading'          => esc_html__( 'Custom padding left for team member', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'group'            => $group_space,
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'item_member_pright',
				'heading'          => esc_html__( 'Custom padding right for team member', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'group'            => $group_space,
			),
			array(
				'type'             => 'textfield',
				'param_name'       => 'name_settings',
				'heading'          => esc_html__( 'Name settings', 'penci-framework' ),
				'value'            => '',
				'group'            => $group_space,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'name_margin_top',
				'heading'          => esc_html__( 'Margin top', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_space,
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'name_margin_bottom',
				'heading'          => esc_html__( 'Margin bottom', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_space,
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'name_letter_spacing',
				'heading'          => esc_html__( 'Letter Spacing', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_space,
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'name_line_height',
				'heading'          => esc_html__( 'Line Height', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_space,
			),
			array(
				'type'             => 'textfield',
				'param_name'       => 'pos_settings',
				'heading'          => esc_html__( 'Position settings', 'penci-framework' ),
				'value'            => '',
				'group'            => $group_space,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'pos_margin_top',
				'heading'          => esc_html__( 'Margin top', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_space,
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'pos_margin_bottom',
				'heading'          => esc_html__( 'Margin bottom', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_space,
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'pos_letter_spacing',
				'heading'          => esc_html__( 'Letter Spacing', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_space,
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'pos_line_height',
				'heading'          => esc_html__( 'Line Height', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_space,
			),
			array(
				'type'             => 'textfield',
				'param_name'       => 'description_settings',
				'heading'          => esc_html__( 'Description settings', 'penci-framework' ),
				'value'            => '',
				'group'            => $group_space,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'desc_margin_top',
				'heading'          => esc_html__( 'Margin top', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_space,
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'desc_margin_bottom',
				'heading'          => esc_html__( 'Margin bottom', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_space,
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'desc_letter_spacing',
				'heading'          => esc_html__( 'Letter Spacing', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_space,
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'desc_line_height',
				'heading'          => esc_html__( 'Line Height', 'penci-framework' ),
				'value'            => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_space,
			),
		),
		Penci_Framework_Shortcode_Params::color_params( '', false ),
		array(
			array(
				'type'             => 'textfield',
				'param_name'       => 'color_team_css',
				'heading'          => esc_html__( 'Team member colors', 'penci-framework' ),
				'value'            => '',
				'group'            => $group_color,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Background color', 'penci-framework' ),
				'param_name'       => 'background_item_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Opacity of background color:', 'penci-framework' ),
				'param_name' => 'op_bg_item_color',
				'value'      => array(
					'0'    => '0',
					'0.05' => '0.05',
					'0.1'  => '0.1',
					'0.15' => '0.15',
					'0.2'  => '0.2',
					'0.25' => '0.25',
					'0.3'  => '0.3',
					'0.35' => '0.35',
					'0.4'  => '0.4',
					'0.45' => '0.45',
					'0.5'  => '0.5',
					'0.55' => '0.55',
					'0.6'  => '0.6',
					'0.65' => '0.65',
					'0.7'  => '0.7',
					'0.75' => '0.75',
					'0.8'  => '0.8',
					'0.85' => '0.85',
					'0.9'  => '0.9',
					'0.95' => '0.95',
					'1'    => '1',
				),
				'std'        => '1',
				'group'      => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Border color', 'penci-framework' ),
				'param_name'       => 'border_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Name color', 'penci-framework' ),
				'param_name'       => 'name_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Position color', 'penci-framework' ),
				'param_name'       => 'pos_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Description color', 'penci-framework' ),
				'param_name'       => 'desc_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Social color', 'penci-framework' ),
				'param_name'       => 'social_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Social hover color', 'penci-framework' ),
				'param_name'       => 'social_hcolor',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
		),
		Penci_Framework_Shortcode_Params::block_option_note_custom_fonts(),
		Penci_Framework_Shortcode_Params::block_option_typo(
			array(
				'prefix'       => 'block_title',
				'title'        => esc_html__( 'Block title settings' ),
				'google_fonts' => Penci_Helper_Shortcode::get_font_family( 'oswald' ),
				'font-size'    => '18px',
			)
		),
		Penci_Framework_Shortcode_Params::block_option_typo(
			array(
				'prefix'       => 'team_name',
				'title'        => esc_html__( 'Name settings' ),
				'google_fonts' => Penci_Helper_Shortcode::get_font_family( 'muktavaani' ),
				'font-size'    => '',
			)
		),
		Penci_Framework_Shortcode_Params::block_option_typo(
			array(
				'prefix'       => 'team_pos',
				'title'        => esc_html__( 'Position settings' ),
				'google_fonts' => Penci_Helper_Shortcode::get_font_family( 'roboto' ),
				'font-size'    => '',
			)
		),
		Penci_Framework_Shortcode_Params::block_option_typo(
			array(
				'prefix'       => 'team_desc',
				'title'        => esc_html__( 'Descript settings' ),
				'google_fonts' => Penci_Helper_Shortcode::get_font_family( 'roboto' ),
				'font-size'    => '',
			)
		)
	),
	'js_view' => 'VcPenciShortcodeView',
);