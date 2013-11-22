<?php print $messages; ?>

<?php 
  $form = drupal_get_form('user_login');
// print "<pre>"; print_r($form); die("</pre>");
  // Remove descriptions.
  $form['name']['#description'] = '';
  $form['pass']['#description'] = '';

  // Add id to color login link
  $form['actions']['submit']['#id'] = 'edit-submit';
?>

<div class="wrapper">
  <div class="form">
    <?php print drupal_render($form); ?>
  </div>
  <div class="links">
    <div class="left"><a href="<?php print $GLOBALS['base_url']; ?>">Back to <?php print variable_get('site_name', 'home page'); ?></a></div>
    <div class="right"><a href="user/password">Request new password</a></div>
  </div>
</div>