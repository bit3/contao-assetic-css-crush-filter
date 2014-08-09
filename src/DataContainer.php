<?php

/**
 * Assetic CssCrush filter integration for Contao Open Source CMS.
 *
 * @copyright  2014 bit3 UG <http://bit3.de>
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    bit3/contao-assetic-css-crush-filter
 * @license    LGPL-3.0+ <http://www.gnu.org/licenses/lgpl-3.0.html>
 */

namespace Bit3\Contao\Assetic\CssCrush;

class DataContainer
{
	public function getCssCrushPlugins()
	{
		$options = array();

		$path = TL_ROOT . '/composer/vendor/css-crush/css-crush/plugins';
		if (is_dir($path)) {
			$files = scandir($path);
			foreach ($files as $file) {
				if (preg_match('#^(.*)\.php$#', $file, $match)) {
					$options[$match[1]] = $match[1];
				}
			}
		}

		return $options;
	}
}
