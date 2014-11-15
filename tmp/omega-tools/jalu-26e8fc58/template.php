<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 
// Add some cool text to the search block form
function jalu_form_alter(&$form, &$form_state, $form_id) {
	
 //dpm($form);
	 
  if ($form_id == 'search_block_form') {
    // HTML5 placeholder attribute
    $form['search_block_form']['#attributes']['placeholder'] = t('Search...');
		 //dpm($form);
  }


  if($form_id  == 'mailchimp_lists_user_subscribe_form_msb_mailing_list'){
//dpm($form);
 //unset($form['mailchimp_lists']['mailchimp_msb_mailing_list']['mergevars']['FNAME']);
//	unset($form['mailchimp_lists']['mailchimp_msb_mailing_list']['mergevars']['LNAME']);
	unset($form['mailchimp_lists']['mailchimp_msb_mailing_list']['mergevars']['MMERGE3']);
	unset($form['mailchimp_lists']['mailchimp_msb_mailing_list']['mergevars']['MMERGE4']);
	unset($form['mailchimp_lists']['mailchimp_msb_mailing_list']['mergevars']['MMERGE5']);
	unset($form['mailchimp_lists']['mailchimp_msb_mailing_list']['mergevars']['MMERGE6']);
	unset($form['mailchimp_lists']['mailchimp_msb_mailing_list']['mergevars']['MMERGE8']);
	unset($form['mailchimp_lists']['mailchimp_msb_mailing_list']['mergevars']['MMERGE9']);
	unset($form['mailchimp_lists']['mailchimp_msb_mailing_list']['mergevars']['MMERGE10']);
	unset($form['mailchimp_lists']['mailchimp_msb_mailing_list']['mergevars']['MMERGE11']); 
	unset($form['mailchimp_lists']['mailchimp_msb_mailing_list']['mergevars']['MMERGE12']); 
	unset($form['mailchimp_lists']['mailchimp_msb_mailing_list']['mergevars']['MMERGE13']); 
	unset($form['mailchimp_lists']['mailchimp_msb_mailing_list']['mergevars']['MMERGE14']); 

   // $form['submit']['value'] = t('Sign Up!');
  $form['submit']['#value'] = t('Sign Up!');

  }
	

}
/*function jalu_alpha_preprocess_node(&$vars){
	
dpm($vars);
}*/

/*function jalu_alpha_preprocess_block(&$variables) {
	
	//dpm(&$variables);
  if ($variables['block_id'] === 'target_block_id') {
    // do something for this block
  }
}*/

/*
function jalu_alpha_file_link(&$vars) {
	
	dpm($vars);
  $file = $variables['file'];
  $icon_directory = $variables['icon_directory'];

  $url = file_create_url($file->uri);
  $icon = theme('file_icon', array('file' => $file, 'icon_directory' => $icon_directory));

  // Set options as per anchor format described at
  // http://microformats.org/wiki/file-format-examples
  $options = array(
    'attributes' => array(
      'type' => $file->filemime . '; length=' . $file->filesize,
    ),
  );

  // Use the description as the link text if available.
  if (empty($file->description)) {
    $link_text = $file->filename;
  }
  else {
    $link_text = $file->description;
    $options['attributes']['title'] = check_plain($file->filename);
  }

  //open files of particular mime types in new window
  $new_window_mimetypes = array('application/pdf','text/plain');
  if (in_array($file->filemime, $new_window_mimetypes)) {
    $options['attributes']['target'] = '_blank';
  }

  return '<span class="file">' . $icon . ' ' . l($link_text, $url, $options) . '</span>';
}*/
