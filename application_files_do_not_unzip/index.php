<?php
/**
 * This file is part of osCommerce ecommerce platform.
 * osCommerce the ecommerce
 * 
 * @link https://www.oscommerce.com
 * @copyright Copyright (c) 2000-2022 osCommerce LTD
 * 
 * Released under the GNU General Public License
 * For the full copyright and license information, please view the LICENSE.TXT file that was distributed with this source code.
 */

if (file_exists('includes/local/configure.php')) include_once('includes/local/configure.php');
if (!defined('TL_INSTALLED') || TL_INSTALLED != true) {
    header('Location: ' . 'install/index.php');
    exit;
}

if ($_SERVER['REQUEST_URI'] == $_SERVER['SCRIPT_NAME'] && basename($_SERVER['SCRIPT_NAME']) == 'index.php' ) {
    $uri = preg_replace('/index.php$/', '', $_SERVER['REQUEST_URI']);
    header('Location: ' . $uri);
    exit();
}

require('includes/application_top.php');

if (defined('DEVELOPMENT_MODE')) {
    if (DEVELOPMENT_MODE == 'True') {
        defined('YII_DEBUG') or define('YII_DEBUG', true);
        defined('YII_ENV') or define('YII_ENV', 'dev');
    } elseif (DEVELOPMENT_MODE == 'False') {
        defined('YII_DEBUG') or define('YII_DEBUG', false);
        defined('YII_ENV') or define('YII_ENV', 'prod');
    }
}

require(__DIR__ . '/lib/frontend/web/index.php');

require_once('includes/application_bottom.php');