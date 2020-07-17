<?php
/**
 * This Software is the property of OXID eSales and is protected
 * by copyright law.
 *
 * Any unauthorized use of this software will be prosecuted by
 * civil and criminal law.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2017
 * @version   OXID eSales Visual CMS
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'          => 'oxsnestedwidgets',
    'title'       => 'Fixed 404 Page with nested widgets.',
    'description' => [
        'de' => 'Fixed 404 Page with nested widgets. Based on the PS module from Keywan Ghadami.',
        'en' => 'Fixed 404 Page with nested widgets. Based on the PS module from Keywan Ghadami.',
    ],
    'thumbnail'   => '',
    'version'     => '',
    'author'      => '',
    'url'         => '',
    'email'       => '',
    'extend'      => [
        \OxidEsales\Eshop\Core\Config::class  => \OxidSupport\Fixed404PageWithNestedWidgets\Config::class
    ]
];
