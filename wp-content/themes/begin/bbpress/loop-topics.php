<?php

/**
 * Topics Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_topics_loop' ); ?>

<ul id="bbp-forum-<?php bbp_forum_id(); ?>" class="bbp-topics">

	<li class="bbp-header">

		<ul class="forum-titles">
			<li class="bbp-topic-title"><i class="fa fa-comment-o"></i><?php esc_html_e( 'Topic', 'begin' ); ?></li>
			<li class="bbp-topic-voice-count"><i class="fa fa-bullhorn"></i><?php esc_html_e( 'Voices', 'begin' ); ?></li>
			<li class="bbp-topic-reply-count"><i class="fa fa-pencil"></i><?php bbp_show_lead_topic() ? esc_html_e( 'Replies', 'begin' ) : esc_html_e( 'Posts', 'begin' ); ?></li>
			<li class="bbp-topic-freshness"><i class="fa fa-refresh"></i><?php esc_html_e( 'Freshness', 'begin' ); ?></li>
		</ul>

	</li>

	<li class="bbp-body">

		<?php while ( bbp_topics() ) : bbp_the_topic(); ?>

			<?php bbp_get_template_part( 'loop', 'single-topic' ); ?>

		<?php endwhile; ?>

	</li>

	<li class="bbp-footer">

		<div class="tr">
			<p>
				<span class="td colspan<?php echo ( bbp_is_user_home() && ( bbp_is_favorites() || bbp_is_subscriptions() ) ) ? '5' : '4'; ?>">&nbsp;</span>
			</p>
		</div><!-- .tr -->

	</li>

</ul><!-- #bbp-forum-<?php bbp_forum_id(); ?> -->

<?php do_action( 'bbp_template_after_topics_loop' ); ?>
