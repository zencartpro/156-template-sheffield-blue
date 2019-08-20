<?php
/**
 * All Business Template
 *
 * @package templateSystem
 * @copyright Copyright 2007 iChoze Internet Solutions http://ichoze.com
 * @copyright Portions Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_languages_header.php 2018-06-28 12:56:41Z webchills $
 */
  $content = '';
  $content .= '<div class="lang_header topBox centeredContent">';
    $lng_cnt = 0;
  while (list($key, $value) = each($lng->catalog_languages)) {
    $content .= '<a href="' . zen_href_link($_GET['main_page'], zen_get_all_get_params(array('language', 'currency')) . 'language=' . $key, $request_type) . '">' . zen_image(DIR_WS_LANGUAGES .  $value['directory'] . '/images/' . $value['image'], $value['name']) . '</a>&nbsp;&nbsp;';
    $lng_cnt ++;
  }
$content .= '</div>';