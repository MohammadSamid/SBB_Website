<?php if(preg_match('#' . basename(__FILE__) . '#', $_SERVER['PHP_SELF'])) { die('You are not allowed to call this page directly.'); } ?>
<div class="wrap">
<?php
$elp_errors = array();
$elp_success = '';
$elp_error_found = FALSE;

// Preset the form fields
$form = array(
	'elp_templ_heading' => '',
	'elp_templ_header' => '',
	'elp_templ_body' => '',
	'elp_templ_footer' => '',
	'elp_templ_status' => ''
);

// Form submitted, check the data
if (isset($_POST['elp_form_submit']) && $_POST['elp_form_submit'] == 'yes')
{
	//	Just security thingy that wordpress offers us
	check_admin_referer('elp_form_add');
	
	$form['elp_templ_heading'] = isset($_POST['elp_templ_heading']) ? wp_filter_post_kses($_POST['elp_templ_heading']) : '';
	if ($form['elp_templ_heading'] == '')
	{
		$elp_errors[] = __('Please enter newsletter subject.', 'email-posts-to-subscribers');
		$elp_error_found = TRUE;
	}

	$form['elp_templ_header'] = '';
	$form['elp_templ_body'] = isset($_POST['elp_templ_body']) ? wp_filter_post_kses($_POST['elp_templ_body']) : '';
	$form['elp_templ_footer'] = '';

	//	No errors found, we can add this Group to the table
	if ($elp_error_found == FALSE)
	{
		$inputdata = array($form['elp_templ_heading'], $form['elp_templ_header'], $form['elp_templ_body'], $form['elp_templ_footer'], "Newsletter");
		$action = false;
		$action = elp_cls_dbquery::elp_template_ins($inputdata);
		
		if($action)
		{
			$elp_success = __('Newsletter was successfully created.', 'email-posts-to-subscribers');
		}
		
		// Reset the form fields
		$form = array(
			'elp_templ_heading' => '',
			'elp_templ_header' => '',
			'elp_templ_body' => '',
			'elp_templ_footer' => '',
			'elp_templ_status' => ''
		);
	}
}

if ($elp_error_found == TRUE && isset($elp_errors[0]) == TRUE)
{
	?>
	<div class="error fade">
		<p><strong><?php echo $elp_errors[0]; ?></strong></p>
	</div>
	<?php
}
if ($elp_error_found == FALSE && strlen($elp_success) > 0)
{
	?>
	<div class="updated fade">
		<p><strong><?php echo $elp_success; ?> <a href="<?php echo ELP_ADMINURL; ?>?page=elp-composenewsletter"><?php _e('Click here', 'email-posts-to-subscribers'); ?></a>
		<?php _e(' to view the details', 'email-posts-to-subscribers'); ?></strong></p>
	</div>
	<?php
}
?>
<div class="form-wrap">
	<div id="icon-plugins" class="icon32"></div>
	<h2><?php _e(ELP_PLUGIN_DISPLAY, 'email-posts-to-subscribers'); ?></h2>
	<h3><?php _e('Compose Newsletter', 'email-posts-to-subscribers'); ?></h3>
	<form name="elp_form" method="post" action="#" onsubmit="return _elp_newsletter_submit()"  >
      
      <label for="tag-link"><?php _e('Subject', 'email-posts-to-subscribers'); ?></label>
      <input name="elp_templ_heading" type="text" id="elp_templ_heading" value="" size="50" maxlength="225" />
      <p><?php _e('Please enter your email subject.', 'email-posts-to-subscribers'); ?></p>
	  
	  <label for="tag-link"><?php _e('Newsletter Content', 'email-posts-to-subscribers'); ?></label>
	  <?php $settings_body = array( 'textarea_rows' => 25 ); ?>
      <?php wp_editor("", "elp_templ_body", $settings_body);?>
      <p><?php _e('Please create your newsletter.', 'email-posts-to-subscribers'); ?></p>
	  
      <input type="hidden" name="elp_form_submit" value="yes"/>
      <p class="submit">
        <input name="publish" lang="publish" class="button add-new-h2" value="<?php _e('Submit', 'email-posts-to-subscribers'); ?>" type="submit" />
        <input name="publish" lang="publish" class="button add-new-h2" onclick="_elp_newsletter_redirect()" value="<?php _e('Cancel', 'email-posts-to-subscribers'); ?>" type="button" />
        <input name="Help" lang="publish" class="button add-new-h2" onclick="_elp_help()" value="<?php _e('Help', 'email-posts-to-subscribers'); ?>" type="button" />
      </p>
	  <?php wp_nonce_field('elp_form_add'); ?>
    </form>
</div>
<p class="description"><?php echo ELP_OFFICIAL; ?></p>
</div>