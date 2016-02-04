<?php
/**
 * @copyright  Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Tests\Unit\Event\Stubs;

use Joomla\Event\Event;

/**
 * A listener listening to some events.
 *
 * @since  1.0
 */
class SomethingListener
{
	/**
	 * Listen to onBeforeSomething.
	 *
	 * @param   Event  $event  The event.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onBeforeSomething(Event $event)
	{
	}

	/**
	 * Listen to onSomething.
	 *
	 * @param   Event  $event  The event.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onSomething(Event $event)
	{
	}

	/**
	 * Listen to onAfterSomething.
	 *
	 * @param   Event  $event  The event.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onAfterSomething(Event $event)
	{
	}
}
