<?php

/**
 * Merger² - Module Merger for Contao Open Source CMS.
 *
 * @package   Merger²
 * @author    Tristan Lins <tristan.lins@bit3.de>
 * @author    David Molineus <david.molineus@netzmacht.de>
 * @copyright 2013-2014 bit3 UG. 2015-2017 Contao Community Alliance
 * @license   https://github.com/contao-community-alliance/merger2/blob/master/LICENSE LGPL-3.0-or-later
 * @link      https://github.com/contao-community-alliance/merger2
 */

declare(strict_types=1);

use ContaoCommunityAlliance\Merger2\EventListener\DataContainer\ArticleDataContainerListener;

/*
 * Add palettes to tl_article
 */

$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = preg_replace(
    '#(\{expert_legend:hide\}.*?);#',
    '$1,inheritable;',
    $GLOBALS['TL_DCA']['tl_article']['palettes']['default']
);


/*
 * Add fields to tl_article
 */

$GLOBALS['TL_DCA']['tl_article']['fields']['inheritable'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['inheritable'],
    'exclude'   => true,
    'default'   => 1,
    'inputType' => 'checkbox',
    'eval'      => ['tl_class' => 'w50'],
    'sql'       => 'char(1) NOT NULL default \'1\'',
];


/*
 * Overwrite inColumn options callback
 */

$GLOBALS['TL_DCA']['tl_article']['fields']['inColumn']['merger_original_options_callback'] =
    $GLOBALS['TL_DCA']['tl_article']['fields']['inColumn']['options_callback'];

$GLOBALS['TL_DCA']['tl_article']['fields']['inColumn']['options_callback'] = [
    ArticleDataContainerListener::class,
    'getActiveLayoutSections',
];
