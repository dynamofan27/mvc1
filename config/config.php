<?php

Config::set('site_name', 'Your site name');

Config::set('languages', ['en', 'ua']);

// Routes. Route name => method prefix
Config::set('routes', ['default' => '', 'admin' => 'admin_']);

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

Config::set('db.host', 'localhost');
Config::set('db.user', 'root');
Config::set('db.password', '');
Config::set('db.db_name', 'mvc');