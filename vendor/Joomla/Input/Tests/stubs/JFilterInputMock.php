<?php
/**
 * @package     Joomla\Framework\Test
 * @subpackage  Input
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

/**
 * JFilterInputMock test class.
 *
 * @package     Joomla\Framework\Test
 * @subpackage  Input
 * @since       11.1
 */
class JFilterInputMock
{
	/**
	 * Test...
	 *
	 * @param   mixed  $input  @todo
	 *
	 * @return void
	 */
	public function clean($input)
	{
		return $input;
	}
}
