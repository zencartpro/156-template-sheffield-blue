<?php
/**
 * Page Template - Featured Products listing
 *
 * @package templateSystem
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_featured_products_default.php for Sheffield Blue 2018-04-04 11:49:16Z webchills $
 */
?>
 <div class="centerColumn" id="featuredDefault">
<h1 id="featuredDefaultHeading"><?php echo HEADING_TITLE; ?></h1>
<?php
if (TEMPLATE_DEBUG == 'True') echo '\includes\templates\TEMPLATES\templates\tpl_featured_products_default.php<br />then requires tpl_modules_listing_display_order.php<br />then tpl_modules_product_listing.php<br /><br />';//SLT debug
require($template->get_template_dir('/tpl_modules_listing_display_order.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_listing_display_order.php');
require($template->get_template_dir('tpl_modules_product_listing.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_product_listing.php');
?>
</div>