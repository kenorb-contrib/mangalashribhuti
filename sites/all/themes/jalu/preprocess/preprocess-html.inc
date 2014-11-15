<?php
drupal_add_js('sites/all/themes/jalu/js/scripts.js', 'file'); 
drupal_add_library('jquery_plugin', 'cycle');

$is_front = $vars['is_front'];
  if ($is_front)
    $vars['metatag'] = render (metatag_metatags_view('global:frontpage', array()));
?> 