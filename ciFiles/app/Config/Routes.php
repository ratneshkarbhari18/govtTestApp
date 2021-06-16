<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('PageLoader');
$routes->setDefaultMethod('dashboard');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'PageLoader::dashboard');

$routes->post("send-email-exe","Marketing::create_lead");
$routes->get("thank-you","PageLoader::thank_you");

$routes->get("login","PageLoader::login");

$routes->post("login-exe","Authentication::mgt_login_exe");

$routes->get("dashboard","PageLoader::dashboard");
$routes->get("users","PageLoader::users");
$routes->get("add-user","PageLoader::add_user");

$routes->post("add-user-exe","Authentication::add_user_exe");
$routes->get("logout","Authentication::logout");

$routes->get("districts","PageLoader::districts");
$routes->get("blocks","PageLoader::blocks");
$routes->get("add-block","PageLoader::add_block");

$routes->post("add-block-exe","Blocks::create");
$routes->post("delete-block","Blocks::delete");

$routes->get("send-report-to-cm","PageLoader::report_to_cm");
$routes->post("report-to-crm-exe","Reports::create_report");

$routes->get("reports-from-ministers","PageLoader::reports_by_ministers");

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
