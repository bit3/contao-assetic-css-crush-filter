<?php

/**
 * Assetic CssCrush filter integration for Contao Open Source CMS.
 *
 * @copyright  2014 bit3 UG <http://bit3.de>
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    bit3/contao-assetic-css-crush-filter
 * @license    LGPL-3.0+ <http://www.gnu.org/licenses/lgpl-3.0.html>
 */

/**
 * Table tl_assetic_filter
 */
$GLOBALS['TL_DCA']['tl_assetic_filter']['metapalettes']['cssCrush'] = array(
	'filter'   => array('type', 'note'),
	'cssCrush' => array('cssCrushPlugins'),
	'status'   => array('disabled', 'notInDebug'),
);

$GLOBALS['TL_DCA']['tl_assetic_filter']['fields']['cssCrushPlugins'] = array(
	'label'            => &$GLOBALS['TL_LANG']['tl_assetic_filter']['cssCrushPlugins'],
	'inputType'        => 'checkboxWizard',
	'exclude'          => true,
	'options_callback' => array('Bit3\Contao\Assetic\CssCrush\DataContainer', 'getCssCrushPlugins'),
	'eval'             => array('multiple' => true),
	'sql'              => "text NULL",
);
