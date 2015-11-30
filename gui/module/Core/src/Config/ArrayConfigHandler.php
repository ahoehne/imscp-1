<?php
/**
 * i-MSCP - internet Multi Server Control Panel
 * Copyright (C) 2010-2015 by Laurent Declercq <l.declercq@nuxwin.com>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

namespace iMSCP\Core\Config;

/**
 * This class provides an interface to manage easily a set of configuration parameters from an array.
 *
 * This class implements the ArrayAccess and Iterator interfaces to improve the access to the configuration parameters.
 *
 * With this class, you can access to your data like:
 *
 * - An array
 * - Via object properties
 * - Via setter and getter methods
 */
class ArrayConfigHandler extends AbstractConfigHandler
{
	/**
	 * Loads all configuration parameters from an array
	 *
	 * @param array $parameters Configuration parameters
	 */
	public function __construct(array $parameters)
	{
		foreach($parameters as $parameter => $value) {
			$this->$parameter = $value;
		}
	}
}
