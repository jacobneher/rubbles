<?php

/**
 * Redirect a user who visits /user to /user/login for better styling.
 */
global $user;
if ($user->uid == 0 && $_GET['q'] == 'user') {
  drupal_goto('user/login');
}

/**
 * Implements hook_preprocess_html().
 */
function rubbles_preprocess_html(&$vars) {
  if ($_GET['q'] == 'user/login' || $_GET['q'] == 'user') {
    $vars['head_title'] = 'Log in to ' . variable_get('site_name');
  }
  else if ($_GET['q'] == 'user/password') {
    $vars['head_title'] = 'Request new password for your account at ' . variable_get('site_name');
  }
}

