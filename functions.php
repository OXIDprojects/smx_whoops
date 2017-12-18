<?php
/**
 * @package   smx_whoops
 * @category  OXID Module
 * @version   2.0.0
 * @license   MIT License http://opensource.org/licenses/MIT
 * @author    shoptimax GmbH / OXID Community
 * @link      https://github.com/OXIDprojects/smx_whoops
 * @see       https://github.com/shoptimax/smx_whoops
 */

if (!function_exists('getShopBasePath')) {
    /**
     * Returns framework base path.
     *
     * @return string
     */
    function getShopBasePath()
    {
        return OX_BASE_PATH;
    }
}

$whoops = new \Whoops\Run;
$whoops->silenceErrorsInPaths('@' . VENDOR_PATH . '@', E_WARNING | E_DEPRECATED);
$whoops->silenceErrorsInPaths('@' . INSTALLATION_ROOT_PATH . '/source/tmp/@', E_WARNING);
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
