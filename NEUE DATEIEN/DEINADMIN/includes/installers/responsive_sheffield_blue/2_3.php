<?php
/**
 * @package Responsive Sheffield Blue
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: 2_3.php 2019-08-20 15:13:51Z webchills $
 */
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '2.3' WHERE configuration_key = 'SHEFFIELD_BLUE_VERSION' LIMIT 1;");