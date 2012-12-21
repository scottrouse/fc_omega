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

/**
  * Implementation of hook_form_alter().
  *
  * Changes default value of Search field and search button and
  * set size of search field.
  */

function fc_omega_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['search_block_form']['#size'] = 40;  // define size of the textfield
    $form['search_block_form']['#default_value'] = t('Search Firecenter'); // Set a default value for the textfield
    $form['actions']['submit']['#value'] = t('Go'); // Change the text on the submit button

// Add extra attributes to the text box
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search Firecenter';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search Firecenter') {this.value = '';}";
  }
}