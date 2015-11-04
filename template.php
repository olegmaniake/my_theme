<?php

function my_theme_preprocess_button(&$variable) {
  $variable['element']['#attributes']['class'][] = 'my-button-class';
}

function my_theme_preprocess_checkbox(&$variable) {
  $variable['element']['#attributes']['class'][] = 'my-checkbox-class';
}

function my_theme_preprocess_radios(&$variable) {
  $variable['element']['#attributes']['class'][] = 'my-radios-class';
}

function my_theme_preprocess_select(&$variables) {
  $variables['element']['#attributes']['class'][] = 'my-select-class';
}
