<?php

namespace Extendables\Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->group('admin', ['namespace' => 'Extendables\Controllers'], function ($routes) {
	// Authentication service
	$routes->get("auth/login", "RestrictedArea::get_login", ['as' => 'pnd_login']);
	$routes->post("auth/logout", "RestrictedArea::post_logout", ['filter' => 'pnd_auth', 'as' => 'pnd_login']);

	$routes->addRedirect('', '/admin/panel');
	// Admin panels
	$routes->group("panel", ['filter' => 'pnd_auth'], function ($routes) {
		$routes->get("", "Admin::index");
	});
});
