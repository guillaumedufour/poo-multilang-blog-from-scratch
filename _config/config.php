<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

session_start();
//ini_set('session.cookie_lifetime', false);

define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // includes php
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9)); // url without domain name and index.php

//websites informations
define("WEBSITE_TITLE", "Mon site");

//database informations
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "poo-blog");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "");

//language
define('DEFAULT_LANGUAGE', 'fr');