<?php
/**
 * @package Flexible Footer Menu
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: flexible_footer_sanitize.php 2019-04-19 18:13:51Z webchills $
 */
if (class_exists('AdminRequestSanitizer')) {
  $sanitizer = AdminRequestSanitizer::getInstance();
  $group = array(
    'col_header' => array('sanitizerType' => 'PRODUCT_DESC_REGEX',
      'method' => 'both',
      'pages' => array('flexible_footer_menu'),
      'params' => array()),
    'page_title' => array('sanitizerType' => 'PRODUCT_DESC_REGEX',
      'method' => 'both',
      'pages' => array('flexible_footer_menu'),
      'params' => array()),
    'col_html_text' => array('sanitizerType' => 'PRODUCT_DESC_REGEX',
      'method' => 'both',
      'pages' => array('flexible_footer_menu'),
      'params' => array()),
    'page_url' => array('sanitizerType' => 'PRODUCT_URL_REGEX',
      'method' => 'both',
      'pages' => array('flexible_footer_menu'),
      'params' => array()),
  );
  $sanitizer->addComplexSanitization($group);
}