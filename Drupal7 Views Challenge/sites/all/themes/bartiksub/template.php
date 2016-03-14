<?php

//Add Reference to External Stylesheet
function bartiksub_preprocess_html(&$variables) {
  drupal_add_css('https://fonts.googleapis.com/css?family=Indie+Flower', array('type' => 'external'));
}
