<?php
/**
 * @package     Joomla\Framework
 * @subpackage  Database
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Database\Iterator;


use Joomla\Database\DatabaseIterator;

/**
 * MySQL database iterator.
 *
 * @package     Joomla\Framework
 * @subpackage  Database
 * @see         http://dev.mysql.com/doc/
 * @since       12.1
 */
class Mysql extends DatabaseIterator
{
	/**
	 * Get the number of rows in the result set for the executed SQL given by the cursor.
	 *
	 * @return  integer  The number of rows in the result set.
	 *
	 * @since   12.1
	 * @see     Countable::count()
	 */
	public function count()
	{
		return mysql_num_rows($this->cursor);
	}

	/**
	 * Method to fetch a row from the result set cursor as an object.
	 *
	 * @return  mixed   Either the next row from the result set or false if there are no more rows.
	 *
	 * @since   12.1
	 */
	protected function fetchObject()
	{
		return mysql_fetch_object($this->cursor, $this->class);
	}

	/**
	 * Method to free up the memory used for the result set.
	 *
	 * @return  void
	 *
	 * @since   12.1
	 */
	protected function freeResult()
	{
		mysql_free_result($this->cursor);
	}
}
