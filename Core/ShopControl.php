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

namespace OxidCommunity\Whoops\Core;

use Whoops\Run;
use OxidEsales\Eshop\Core\Registry;
use Whoops\Handler\PrettyPageHandler;

class ShopControl extends ShopControl_parent
{
    /**
     * @var Whoops\Run Whoops run object
     */
    protected $_run = null;

    /**
     * Sets default exception handler.
     * Ideally all exceptions should be handled with try catch and default exception should never be reached.
     *
     * @return null;
     */
    protected function _setDefaultExceptionHandler()
    {
        if (($this->isAdmin() && $this->getUser()) || !Registry::getConfig()->isProductiveMode() || $this->_isDebugMode()) {
            $this->_run = new Run();
            $this->_run->pushHandler(new PrettyPageHandler());
            $this->_run->register();
        }
    }

    /**
     * Shows exception message if debug mode is enabled, redirects otherwise.
     *
     * @param oxConnectionException $oEx message to show on exit
     */
    protected function _handleDbConnectionException($oEx)
    {
        $oEx->debugOut();
        if (($this->isAdmin() && $this->getUser()) || !Registry::getConfig()->isProductiveMode() || $this->_isDebugMode()) {
            // let whoops do the fancy stuff :)
            $this->_run->handleException($oEx);
        } else {
            header("HTTP/1.1 500 Internal Server Error");
            header("Location: offline.html");
            header("Connection: close");
        }
    }
}
