<?php print $messages; ?>

<?php 
  $form = drupal_get_form('user_login');
  // Remove descriptions.
  $form['name']['#description'] = '';
  $form['pass']['#description'] = '';

  // Add id to color login link
  $form['actions']['submit']['#id'] = 'edit-submit';

  // Add autofocus to name textbox
  $form['name']['#attributes']['autofocus'] = 'autofocus';
?>

<div class="wrapper">
  <div class="form">
    <?php print drupal_render($form); ?>
    <div class="new-password"><a href="user/password">Forgot your password?</a></div>
  </div>
  <div class="links">
    <div class="center"><a href="<?php print $GLOBALS['base_url']; ?>">Back to <?php print variable_get('site_name', 'home page'); ?></a></div>
  </div>
</div>