<?php

/** This is main file for start application **/
/** ======================================= **/
/** =========== MVC Framework ============= **/
/** ======================================= **/
/**
 * Public web application index file
 *
 * @project ApPHP Directy CMF
 * @author ApPHP <info@apphp.com>
 * @link https://www.apphp.com/php-directy-cmf/
 * @copyright Copyright (c) 2013 - 2015 ApPHP Directy CMF
 * @license https://www.apphp.com/php-directy-cmf/
 */

// Change the following paths if necessary
defined('APPHP_PATH') || define('APPHP_PATH', dirname(__FILE__));
// Directory separator
defined('DS') || define('DS', DIRECTORY_SEPARATOR);
// Modes: production | debug | demo | test | hidden
defined('APPHP_MODE') or define('APPHP_MODE', 'production');

$apphp = dirname(__FILE__).'/framework/Apphp.php';
$config = APPHP_PATH.'/protected/config/';

require_once($apphp);
A::init($config)->run();
