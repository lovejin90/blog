<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'mainController';
$route['404_override'] = 'error404';
$route['translate_uri_dashes'] = FALSE;
$route['about'] = 'mainController/about';
$route['skill'] = 'mainController/skill';
$route['board'] = 'mainController/board';


// test
$route['plex-update'] = 'plexController';

// $route['gate'] = 'adminController/gate';
// $route['admin'] = 'adminController/index';