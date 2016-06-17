<?php
/**
 * Part of the Joomla CMS
 *
 * @copyright  Copyright (C) 2015 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

use Joomla\Http\Application;
use Joomla\Http\Middleware\CommandBusMiddleware;
use Joomla\Http\Middleware\RendererMiddleware;
use Joomla\Http\Middleware\ResponseSenderMiddleware;
use Joomla\Http\Middleware\RouterMiddleware as DefaultRouterMiddleware;
use Joomla\J3Compatibility\Http\Middleware\RouterMiddleware as LegacyRouterMiddleware;
use Joomla\PageBuilder\RouterMiddleware as PageBuilderRouterMiddleware;

require_once 'libraries/vendor/autoload.php';
require_once __DIR__ . '/init.php';

$container = initContainer();

$app = new Application(
	[
		new ResponseSenderMiddleware,
		new RendererMiddleware($container->get('dispatcher')),
		new PageBuilderRouterMiddleware($container->get('command_bus')),
		new DefaultRouterMiddleware,
		new LegacyRouterMiddleware,
		new CommandBusMiddleware($container->get('command_bus')),
	]
);

$response = $app->run($container->get('Request'));
