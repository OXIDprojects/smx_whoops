<?php
/**
 * @package   ocb_cleartmp
 * @category  OXID Module
 * @version   2.0.0
 * @license   GNU License http://opensource.org/licenses/GNU
 * @author    Joscha Krug <krug@marmalade.de> / OXID Community
 * @link      https://github.com/OXIDprojects/adminsearch
 * @see       https://github.com/OXIDCookbook/ocb_cleartmp
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'          => 'smx_whoops',
    'title'       => 'OXID Community Whoops (by shoptimax)',
    'description' => 'Whoops exception handling',
    'thumbnail'   => '',
    'version'     => '2.0.0',
    'author'      => 'OXID Community',
    'url'         => 'https://github.com/OXIDCookbook/smx_whoops',
    'email'       => '',
    'extend'      => [
        \OxidEsales\Eshop\Core\ShopControl::class => \OxidCommunity\Whoops\Core\ShopControl::class,
    ],
    'settings'    => [
    ],
    'blocks'      => [
    ],
];
