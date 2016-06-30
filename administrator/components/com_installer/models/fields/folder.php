<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_installer
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

require_once __DIR__ . '/../../helpers/installer.php';

/**
 * Folder Field class for the Joomla Framework.
 *
 * @since  3.5
 */
class JFormFieldFolder extends JFormAbstractlist
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  3.5
	 */
	protected $type = 'Folder';

	/**
	 * Method to get the field options.
	 *
	 * @return  array  The field option objects.
	 *
	 * @since   3.5
	 */
	public function getOptions()
	{
		$options = InstallerHelper::getExtensionGroupes();

		return array_merge(parent::getOptions(), $options);
	}
}
