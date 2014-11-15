<aside<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php print $content; ?>
  </div>
<?php


	
	$block = module_invoke('mailchimp_lists', 'block_view', 1);
  print render($block);

?>
</aside>