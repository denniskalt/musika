<?php

define ('BASEDIR', __DIR__);
include(BASEDIR .'/../db_config.inc.php');

function h($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'utf-8');
}

// set some php.ini-values (if possible)
error_reporting(22519);                 // E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED
ini_set('display_errors', 'On');
ini_set('html_errors', 'On');


// register function to automatically load classes
spl_autoload_register( function($class) {
    require_once('classes/' . $class . '.php');
});


// create connection to database                       'root' , ''
$dbh = new PDO('mysql:host=localhost;dbname=phpprakt', DB_USER, DB_PASS,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// set encoding an filetype (assuming we are serving only HTML files ATM)
header('Content-Type: text/html; charset: utf-8');

// start session
session_start();
