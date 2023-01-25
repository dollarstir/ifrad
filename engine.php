<?php

require_once 'loader/autoloader.php';
define('theme', 'front2');
$router = new Router([
    new Route(
        '/if',
        function ($context) {
            return Viewer::view(theme.'/index.php', $context);
        }
    ),

    new Route(
        '/if/home',
        function ($context) {
            return Viewer::view(theme.'/index.php', $context);
        }
    ),

    new Route(
        '/if/about',
        function ($context) {
            return Viewer::view(theme.'/about.php', $context);
        }
    ),

    new Route(
        '/if/contact',
        function ($context) {
            return Viewer::view(theme.'/contact.php', $context);
        }
    ),

    new Route(
        '/if/gallery',
        function ($context) {
            return Viewer::view(theme.'/gallery.php', $context);
        }
    ),

    new Route(
        '/if/track',
        function ($context) {
            return Viewer::view(theme.'/track.php', $context);
        }
    ),

    new Route(
        '/if/services',
        function ($context) {
            return Viewer::view(theme.'/services.php', $context);
        }
    ),

    // admin side

    new Route(
        '/if/manager',
        function ($context) {
            return Viewer::view('back/index.php', $context);
        }
    ),

    new Route(
        '/if/newpackage',
        function ($context) {
            return Viewer::view('back/addpackage.php', $context);
        }
    ),
    new Route(
        '/if/packages',
        function ($context) {
            return Viewer::view('back/viewpackage.php', $context);
        }
    ),

    new Route(
        '/if/editpackage',
        function ($context) {
            return Viewer::view('back/editp.php', $context);
        }
    ),

    new Route(
        '/if/login',
        function ($context) {
            return Viewer::view('back/auth.php', $context);
        }
    ),
    new Route(
        '/if/logout',
        function ($context) {
            return Viewer::view('back/logout.php', $context);
        }
    ),

    new Route(
        '/if/appsettings',
        function ($context) {
            return Viewer::view('back/app.php', $context);
        }
    ),

    new Route(
        '/if/addstatus',
        function ($context) {
            return Viewer::view('back/addstatus.php', $context);
        }
    ),

    new Route(
        '/if/viewstatus',
        function ($context) {
            return Viewer::view('back/viewstatus.php', $context);
        }
    ),
]);
$router->launch();
