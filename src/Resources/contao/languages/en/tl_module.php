<?php

/**
 * Merger² - Module Merger for Contao Open Source CMS.
 *
 * @package   Merger²
 * @author    Tristan Lins <tristan.lins@bit3.de>
 * @author    David Molineus <david.molineus@netzmacht.de>
 * @author    Ingolf Steinhardt <info@e-spin.de>
 * @copyright 2013-2014 bit3 UG. 2015-2018 Contao Community Alliance
 * @license   https://github.com/contao-community-alliance/merger2/blob/master/LICENSE LGPL-3.0-or-later
 * @link      https://github.com/contao-community-alliance/merger2
 */

/*
 * Fields
 */

$GLOBALS['TL_LANG']['tl_module']['merger_mode']      = array('Mode', 'The evaluation mode.');
$GLOBALS['TL_LANG']['tl_module']['merger_data']      = array(
    'Contents',
    'Choose the included contents to be inserted and define the desired conditions.'
);
$GLOBALS['TL_LANG']['tl_module']['merger_template']  = array(
    'Template',
    'Choose your template for this merger.'
);
$GLOBALS['TL_LANG']['tl_module']['merger_container'] = array(
    'Use Container',
    'Use a container and wrap it around the content. The container is required if CSS-Id/Class is to be set.'
);

/*
 * References
 */

$GLOBALS['TL_LANG']['tl_module']['merger_data_content']   = 'Content';
$GLOBALS['TL_LANG']['tl_module']['merger_data_condition'] = 'Condition';
$GLOBALS['TL_LANG']['tl_module']['merger_data_disabled']  = array(
    '<img src="system/themes/flexible/icons/unpublished.svg" width="15" height="15" alt="Disabled" title="Disabled">'
);
$GLOBALS['TL_LANG']['tl_module']['merger_data_edit']      = array('&nbsp;');

$GLOBALS['TL_LANG']['merger2']['mode']['all']                   = 'Evaluate all';
$GLOBALS['TL_LANG']['merger2']['mode']['upFirstFalse']          = 'Evaluate up to the first "false" item.';
$GLOBALS['TL_LANG']['merger2']['mode']['upFirstTrue']           = 'Evaluate up to the first "true" item.';
$GLOBALS['TL_LANG']['merger2']['legend_article']                = 'Contents and conditions';
$GLOBALS['TL_LANG']['merger2']['article']                       = 'Article';
$GLOBALS['TL_LANG']['merger2']['inherit_articles']              = 'Inherit articles from parent page';
$GLOBALS['TL_LANG']['merger2']['inherit_all_articles']          = 'Inherit articles from parent to root page';
$GLOBALS['TL_LANG']['merger2']['inherit_articles_fallback']     = 'Inherit article of this site <em>or</em> from parent page';
$GLOBALS['TL_LANG']['merger2']['inherit_all_articles_fallback'] = 'Inherit article of this site <em>or</em> from parent page to root page';
$GLOBALS['TL_LANG']['merger2']['legend_module']                 = 'Modules: %s [ID %s]';
