<?php

/**
 * User Subscriptions
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

	<?php do_action( 'bbp_template_before_user_subscriptions' ); ?>

	<?php if ( bbp_is_subscriptions_active() ) : ?>

		<?php if ( bbp_is_user_home() || current_user_can( 'edit_users' ) ) : ?>

			<div id="bbp-user-subscriptions" class="bbp-user-subscriptions">
				<div class="dt-sc-hr-invisible-xsmall"></div>            
				<h2 class="entry-title"><?php esc_html_e('Subscribed Forums', 'begin' ); ?></h2>
				<div class="bbp-user-section">

					<?php if ( bbp_get_user_forum_subscriptions() ) : ?>

						<?php bbp_get_template_part( 'loop', 'forums' ); ?>

					<?php else : ?>

						<p><?php bbp_is_user_home() ? esc_html_e('You are not currently subscribed to any forums.', 'begin' ) : esc_html_e('This user is not currently subscribed to any forums.', 'begin' ); ?></p>

					<?php endif; ?>

				</div>
				<div class="dt-sc-hr-invisible-xsmall"></div>
				<h2 class="entry-title"><?php esc_html_e('Subscribed Topics', 'begin' ); ?></h2>
				<div class="bbp-user-section">

					<?php if ( bbp_get_user_topic_subscriptions() ) : ?>

						<?php bbp_get_template_part( 'pagination', 'topics' ); ?>

						<?php bbp_get_template_part( 'loop',       'topics' ); ?>

						<?php bbp_get_template_part( 'pagination', 'topics' ); ?>

					<?php else : ?>

						<p><?php bbp_is_user_home() ? esc_html_e('You are not currently subscribed to any topics.', 'begin' ) : esc_html_e('This user is not currently subscribed to any topics.', 'begin' ); ?></p>

					<?php endif; ?>

				</div>
			</div><!-- #bbp-user-subscriptions -->

		<?php endif; ?>

	<?php endif; ?>

	<?php do_action( 'bbp_template_after_user_subscriptions' ); ?>
