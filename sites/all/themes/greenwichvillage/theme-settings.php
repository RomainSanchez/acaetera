<?php

/**
 * @file
 * Theme setting callbacks for the garland theme.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function greenwichvillage_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['greenwichvillage_header'] = array(
    '#type' => 'radios',
    '#title' => t('Header style'),
    '#options' => array(
      'default' => t('Default'),
      'style-1' => t('style 1'),
      'style-2' => t('style 2'),
    ),
    '#default_value' => theme_get_setting('greenwichvillage_header'),
    '#description' => t('Specify template header layout'),
    '#weight' => -2,
  );
     $form['gv_map'] = array(
    '#type' => 'textfield',
    '#title' => t('Your location for map'),
    '#default_value' => theme_get_setting('gv_map'),
    '#description' => t('Specify your location on map for example: Khulna, Bangladesh'),
    '#weight' => -1,
  );
}
