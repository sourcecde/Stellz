<?php add_action( 'vc_before_init', 'dt_sc_recent_posts_by_cat_vc_map' );
function dt_sc_recent_posts_by_cat_vc_map() {

	$arr = array( esc_html__('Yes','veda-core') => 'yes', esc_html__('No','veda-core') => 'no' );

	vc_map( array(
		"name" => esc_html__( "Recent Posts From Category", 'veda-core' ),
		"base" => "dt_sc_recent_cat_post",
		"icon" => "dt_sc_recent_cat_post",
		"category" => DT_VC_CATEGORY,
		"description" => esc_html__("Show recent posts from given categories",'veda-core'),
		"params" => array(

			// Post Count
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Category ID', 'veda-core' ),
				'param_name' => 'category',
				'description' => esc_html__( 'Enter category ID', 'veda-core' ),
				'admin_label' => true
			),

			// Post Count
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Post Counts', 'veda-core' ),
				'param_name' => 'count',
				'description' => esc_html__( 'Enter post count', 'veda-core' ),
				'admin_label' => true
			),

			// Post column
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Columns','veda-core'),
				'param_name' => 'column',
				'value' => array(
					esc_html__('I Column','veda-core') => 1,
					esc_html__('II Columns','veda-core') => 2,
					esc_html__('III Columns','veda-core') => 3
				),
				'std' => '3'
			),

			// Post style
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Style','veda-core'),
				'param_name' => 'style',
				'value' => array(
					esc_html__('Default','veda-core') => '',
					esc_html__('Date Left','veda-core') => 'entry-date-left',
					esc_html__('Date and Author Left','veda-core') => 'entry-date-author-left',
					esc_html__('Medium','veda-core') => 'blog-medium-style',
					esc_html__('Medium Highlight','veda-core') => 'blog-medium-style dt-blog-medium-highlight',
					esc_html__('Medium Skin Highlight','veda-core') => 'blog-medium-style dt-blog-medium-highlight dt-sc-skin-highlight'	
				)
			),

			// Allow excerpt
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Allow Excerpt','veda-core'),
				'param_name' => 'allow_excerpt',
				'value' => $arr
			),

			// Excerpt Length
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Excerpt Length', 'veda-core' ),
				'param_name' => 'excerpt_length',
				'value' => 40
			),

			// Show Post Format?
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Show Post Format?','veda-core'),
				'param_name' => 'show_post_format',
				'value' => $arr
			),

			// Show Author ?
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Show Author ?','veda-core'),
				'param_name' => 'show_author',
				'value' => $arr
			),

			// Show Date ?
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Show Date ?','veda-core'),
				'param_name' => 'show_date',
				'value' => $arr
			),

			// Show Comment ?
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Show Comment ?','veda-core'),
				'param_name' => 'show_comment',
				'value' => $arr
			),

			// Show Category?
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Show Category?','veda-core'),
				'param_name' => 'show_category',
				'value' => $arr
			),

			// Show Tag?
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Show Tag?','veda-core'),
				'param_name' => 'show_tag',
				'value' => $arr
			),

			// Button Style
			array(
				'type' => 'textarea_html',
				'heading' => esc_html__('Read more Button','veda-core'),
				'param_name' => 'content',
				'value' => '[dt_sc_button size="small" iconclass="fa fa-long-arrow-right" iconalign="icon-right with-icon" style="filled" class="type1" title="Read More" icon_type="fontawesome" target="_blank" /]'
			)
		)
	) );	
}?>