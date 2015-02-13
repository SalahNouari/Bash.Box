<?php

function incsub_support_get_template( $slug, $name = false ) {
	$template = $slug . '.php';

	$template = apply_filters( 'support_system_get_template', $template, $slug );

	$templates = array();
	if ( $name )
		$templates[] = $slug . '-' . $name . '.php';
	$templates[] = $slug . '.php';

	$locations = support_system_get_template_locations();

	$located = false;

	foreach ( $templates as $template ) {
		if ( empty( $template ) )
			return;

		$template = ltrim( $template, '/' );


		foreach ( $locations as $location ) {
			if ( empty( $location ) )
				continue;

			if ( file_exists( trailingslashit( $location ) . $template ) ) {
				$located = trailingslashit( $location ) . $template;
				break;
			}

		}

		if ( ! empty( $located ) ) {
			load_template( $located, false );
			break;
		}
	}

	return $located;
}

function support_system_get_template_locations() {
	return apply_filters( 'support_system_templates_locations', array(
		get_stylesheet_directory() . '/incsub-support',
		INCSUB_SUPPORT_PLUGIN_DIR . 'inc/templates'
	) );
}

function incsub_support_get_the_ticket_attachments() {
	$ticket_id = incsub_support()->query->ticket->ticket_id;
	$ticket = incsub_support_get_ticket( $ticket_id );

	if ( ! $ticket )
		return array();

	$replies = $ticket->get_replies();
	$main_reply = wp_list_filter( $replies, array( 'is_main_reply' => true ) );
	return $main_reply[0]->attachments;
}

function incsub_support_ticket_replies() {
	$ticket_id = incsub_support()->query->ticket->ticket_id;
	incsub_support_get_template( 'ticket-replies', $ticket_id );
}

function incsub_support_tickets_list_nav() {
	incsub_support_get_template( 'tickets-nav' );
}

function incsub_support_reply_form() {
	ob_start();
	?>
		<form method="post" id="support-system-reply-form" action="#support-system-reply-form-wrap" enctype="multipart/form-data">
			<?php incsub_support_reply_form_errors(); ?>
			<div class="support-system-attachments"></div>
			<?php incsub_support_editor( 'reply' ); ?>
			<?php incsub_support_reply_form_fields(); ?>
			<br/>
			<input type="submit" name="support-system-submit-reply" class="button small" value="<?php esc_attr_e( 'Submit Reply', INCSUB_SUPPORT_LANG_DOMAIN ); ?>" />
		</form>
	<?php

	echo apply_filters( 'support_system_reply_form', ob_get_clean() );
}

function incsub_support_list_replies( $args = array() ) {
	$replies = incsub_support()->query->ticket->get_replies();

	// Remove the main reply
	unset( $replies[0] );


	global $ticket_reply;

	foreach ( $replies as $reply ) {
		$ticket_reply = $reply;

		incsub_support_get_template( 'ticket-reply' );

	}

}

function incsub_support_the_reply_class() {
	global $ticket_reply;

	$class = array();
	if ( is_multisite() && is_super_admin( $ticket_reply->get_poster_id() ) ) {
		$class[] = 'support-system-reply-staff';
	}

	if ( ! is_multisite() && current_user_can( 'manage_options' ) )
		$class[] = 'support-system-reply-staff';

	return implode( ' ' , $class );
}

function incsub_support_get_the_reply_id() {
	global $ticket_reply;
	return $ticket_reply->message_id;
}

function incsub_support_get_the_poster_id() {
	global $ticket_reply;
	return $ticket_reply->get_poster_id();
}

function incsub_support_get_the_poster_username() {
	global $ticket_reply;

	$user = get_userdata( $ticket_reply->get_poster_id() );
	if ( ! $user ) {
		$username = __( 'Unknown user', INCSUB_SUPPORT_LANG_DOMAIN );
	}
	else {
		$username = $user->data->user_nicename;
	}

	return $username;
}

function incsub_support_get_the_reply_message() {
	global $ticket_reply;
	return $ticket_reply->message;
}

function incsub_support_get_the_reply_date() {
	global $ticket_reply;
	return incsub_support_get_translated_date( $ticket_reply->message_date );
}

function incsub_support_reply_has_attachments() {
	global $ticket_reply;

	if ( ! empty( $ticket_reply->attachments ) && is_array( $ticket_reply->attachments ) )
		return true;

	return false;
}

function incsub_support_get_the_reply_attachments() {
	global $ticket_reply;

	return $ticket_reply->attachments;
}

function incsub_support_the_category_filter( $class = '' ) {
	$selected = '';
	if ( ! empty( $_REQUEST['ticket-cat'] ) && incsub_support_get_ticket_category( absint(  $_REQUEST['ticket-cat'] ) ) )
		$selected = absint( $_REQUEST['ticket-cat'] );

	$args = array(
		'class' => $class,
		'selected' => $selected
	);

	incsub_support_ticket_categories_dropdown( $args );
}

function incsub_support_the_search_input( $class = '' ) {
	$search = ! empty( $_REQUEST['support-system-s'] ) ? stripslashes( $_REQUEST['support-system-s'] ) : '';
	?>
		<input type="text" placeholder="<?php esc_attr_e( 'Search tickets', INCSUB_SUPPORT_LANG_DOMAIN ); ?>" name="support-system-s" class="<?php echo esc_attr( $class ); ?>" value="<?php echo esc_attr( $search ); ?>"/>
	<?php
}


function incsub_support_paginate_links( $args = '' ) {
	global $wp_query, $wp_rewrite;

	$total = isset( incsub_support()->query->total_pages ) ? incsub_support()->query->total_pages : 0;
	$current = isset( incsub_support()->query->page ) ? incsub_support()->query->page : 1;

	$current_url = set_url_scheme( 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
	$pagenum_link = html_entity_decode( remove_query_arg( 'support-system-page', $current_url ) );

	$defaults = array(
		'ul_class' => 'support-system-pagination',
		'disabled_class' => 'support-system-pag-disabled',
		'arrow_class' => 'support-system-pag-arrow',
		'current_class' => 'support-system-current',
		'prev_text' => __( '&laquo; Previous', INCSUB_SUPPORT_LANG_DOMAIN ),
		'next_text' => __( 'Next &raquo;', INCSUB_SUPPORT_LANG_DOMAIN ),
		'end_size' => 1,
		'mid_size' => 2,
		'type' => 'plain',
		'before_page_number' => '',
		'after_page_number' => ''
	);

	$args = wp_parse_args( $args, $defaults );
	extract( $args );

	// Who knows what else people pass in $args
	$total = (int) $total;
	if ( $total < 2 ) {
		return;
	}

	$end_size = (int) $end_size; // Out of bounds?  Make it the default.

	if ( $end_size < 1 ) {
		$end_size = 1;
	}

	$mid_size = (int) $mid_size;
	if ( $mid_size < 0 ) {
		$mid_size = 2;
	}

	$r = '';
	$page_links = array();
	$dots = false;


	if ( $current && 1 < $current ) {
		$link = $pagenum_link;
		if ( $current != 2 )
			$link = add_query_arg( 'support-system-page', $current - 1, $link );

		$page_links[] = '<li class="support-system-prev support-system-page-numbers"><a href="' . esc_url( $link ) . '">' . $prev_text . '</a></li>';
	}

	for ( $n = 1; $n <= $total; $n++ ) {
		if ( $n == $current ) {
			$link = $pagenum_link;
			$link = add_query_arg( 'support-system-page', $n, $link );
			$page_links[] = "<li class='support-system-page-numbers $current_class'><a href='" . esc_url( $link ) . "'>" . $before_page_number . number_format_i18n( $n ) . $after_page_number . "</a></li>";
			$dots = true;
		}
		else {
			if ( $n <= $end_size || ( $current && $n >= $current - $mid_size && $n <= $current + $mid_size ) || $n > $total - $end_size ) {
				$link = $pagenum_link;
				if ( 1 != $n )
					$link = add_query_arg( 'support-system-page', $n, $link );

				$page_links[] = "<li class='support-system-page-numbers'><a href='" . esc_url( $link ) . "'>" . $before_page_number . number_format_i18n( $n ) . $after_page_number . "</a></li>";
				$dots = true;
			}
			elseif ( $dots ) {
				$page_links[] = '<li class="support-system-page-numbers support-system-dots ' . esc_attr( $disabled_class . " " . $arrow_class ) . '"><a href="">' . __( '&hellip;' ) . '</a></li>';
				$dots = false;
			}
		}
	}

	if ( $current && ( $current < $total || -1 == $total ) ) {
		$link = $pagenum_link;
		$link = add_query_arg( 'support-system-page', $current + 1, $link );
		$page_links[] = '<li class="support-system-next support-system-page-numbers"><a href="' . esc_url( $link ) . '">' . $next_text . '</a></li>';
	}

	$r .= "<ul class='" . $ul_class . "' role='menubar' aria-label='" .  esc_attr__( 'Pagination', INCSUB_SUPPORT_LANG_DOMAIN ) . "'>" . join( $page_links ) . "</ul>";

	echo $r;
}

function incsub_support_the_ticket_badges( $args = array() ) {
	$ticket = incsub_support()->query->ticket;

	$defaults = array(
		'badge_base_class' => 'support-system-badge',
		'replies_badge_class' => 'support-system-replies-badge',
		'status_badge_class' => 'support-system-closed-badge'
	);

	$args = wp_parse_args( $args, $defaults );
	extract( $args );

	$badges = array();

	// Ticket status
	$badges[] = '<span class="' . esc_attr( $badge_base_class . ' ' . $status_badge_class ) . '">' . incsub_support_get_ticket_status_name( $ticket->ticket_status ) . '</span>';

	// Replies number
	$num_replies = number_format_i18n( $ticket->num_replies, 0 );
	$badges[] = '<span class="' . esc_attr( $badge_base_class . ' ' . $replies_badge_class ) . '">' . esc_html( sprintf( _n( '1 reply', '%s replies', $num_replies , INCSUB_SUPPORT_LANG_DOMAIN ), $num_replies ) ) . '</span>';

	$badges = implode( ' ', $badges );
	echo $badges;
}


function incsub_support_editor( $type ) {
	$content = '';
	if ( isset( $_POST['support-system-' . $type . '-message'] ) )
		$content = stripslashes_deep( $_POST['support-system-' . $type . '-message'] );

	$settings = array(
		'media_buttons' => false,
		'quicktags' => false,
		'textarea_rows' => 10,
		'teeny' => true
	);
	wp_editor( $content, 'support-system-' . $type . '-message', $settings );
}

function incsub_support_reply_form_fields() {
	$ticket = incsub_support()->query->ticket;
	wp_nonce_field( 'support-system-submit-reply-' . $ticket->ticket_id . '-' . get_current_user_id() . '-' . get_current_blog_id() );
	?>
		<input type="hidden" name="support-system-reply-fields[user]" value="<?php echo get_current_user_id(); ?>" />
		<input type="hidden" name="support-system-reply-fields[ticket]" value="<?php echo $ticket->ticket_id; ?>" />
		<input type="hidden" name="support-system-reply-fields[blog]" value="<?php echo get_current_blog_id(); ?>" />
	<?php
}

function incsub_support_user_sites_dropdown( $args = array() ) {

	$defaults = array(
		'name' => 'support-system-user-sites',
		'id' => false,
		'echo' => false,
		'user_id' => false,
		'selected' => ''
	);

	$args = wp_parse_args( $args, $defaults );
	extract( $args );

	if ( ! $id )
		$id = $name;

	if ( ! $user_id )
		$user_id = get_current_user_id();

	if ( ! $echo )
		ob_start();

	if ( is_multisite() && incsub_support_user_can( $user_id, 'insert_ticket' ) ) {
		$list = wp_list_pluck( get_blogs_of_user( $user_id ), 'blogname' );
		?>
			<select name="<?php echo esc_attr( $name ); ?>" id="<?php echo esc_attr( $id ); ?>">
				<option value="" <?php selected( empty( $selected ) ); ?>><?php _e( '-- Default site --', INCSUB_SUPPORT_LANG_DOMAIN ); ?></option>
				<?php foreach ( $list as $blog_id => $blog_name ): ?>
					<option value="<?php echo $blog_id; ?>" <?php selected( $selected == $blog_id ); ?>><?php echo $blog_name; ?></option>
				<?php endforeach; ?>
			</select>
		<?php
	}
	else {
		echo '';
	}

	if ( ! $echo )
		return ob_get_clean();

}

function incsub_support_reply_form_errors() {
	incsub_support_get_errors( 'support-system-reply-form' );
}


