<?php print $messages; ?>

<?php 
  $form = drupal_get_form('user_pass');

  // Remove descriptions.
  $form['name']['#description'] = '';

  // Change e-mail to e-mail
  $form['name']['#title'] = str_replace('e-mail', 'email', $form['name']['#title']);
  $form['actions']['submit']['#value'] = str_replace('E-mail', 'Email', $form['actions']['submit']['#value']);

  // Add id to color login link
  $form['actions']['submit']['#id'] = 'edit-submit';

  // Add autofocus to name textbox
  $form['name']['#attributes']['autofocus'] = 'autofocus';
?>

<div class="wrapper">
  <div class="form">
    <?php print drupal_render($form); ?>
  </div>
  <div class="links">
    <div class="left"><a href="/user/login">Back to login</a></div>
    <div class="right"><a href="user/password">Request new password</a></div>
  </div>
</div>