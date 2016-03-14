<?php
  //ADD REFERENCE TO EXTERNAL STYLESHEET
  function olivertheme_preprocess_html(&$variables) {
    drupal_add_css('https://fonts.googleapis.com/css?family=Lobster',array('type' => 'external'));
  }

  function olivertheme_preprocess_html1(&$variables) {
    drupal_add_css('https://fonts.googleapis.com/css?family=Alegreya+Sans',array('type' => 'external'));
  }
