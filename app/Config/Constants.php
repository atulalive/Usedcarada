<?php

/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2592000);
defined('YEAR')   || define('YEAR', 31536000);
defined('DECADE') || define('DECADE', 315360000);

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

/* Set For BASE URL ALIVE INC. */

if ( (! empty($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] == 'https') ||

(! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ||
(! empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443') ) {
$protocole = 'https://';
} else {
$protocole = 'http://';

}

$host = $_SERVER['HTTP_HOST'] . '/';
$project = explode('/', $_SERVER['REQUEST_URI']);
$baseurl = $protocole . $host . $project[1];
$myappBaseUrl = $baseurl;
defined('BASESEURL') || define('BASESEURL',$myappBaseUrl);


/* * ================================================================
 *  PATHs OF BASIC DIRECTORIES
 * ================================================================== */
define("DIR_CONFIG", __DIR__ . DIRECTORY_SEPARATOR);
define("DIR_ROOT", dirname(DIR_CONFIG) . DIRECTORY_SEPARATOR);
define("DIR_BASE", dirname(DIR_ROOT) . DIRECTORY_SEPARATOR);


define("DIR_CLASSES", DIR_ROOT . "classes" . DIRECTORY_SEPARATOR);
define("DIR_INCLUDE", DIR_ROOT . "includes" . DIRECTORY_SEPARATOR);
define("DIR_ASSETS", DIR_BASE . "assets" . DIRECTORY_SEPARATOR);
define("DIR_CSS", DIR_BASE . "css" . DIRECTORY_SEPARATOR);
define("DIR_JS", DIR_BASE . "js" . DIRECTORY_SEPARATOR);
define("DIR_IMAGE", DIR_ASSETS . "images" . DIRECTORY_SEPARATOR);
define("DIR_MEDIA", DIR_IMAGE . "media" . DIRECTORY_SEPARATOR);
define("DIR_TMP", DIR_MEDIA . "tmp" . DIRECTORY_SEPARATOR);
define("DIR_UPLOAD", DIR_MEDIA . "uploads" . DIRECTORY_SEPARATOR);
define("DIR_ATTACHMENT", DIR_UPLOAD . "attachments" . DIRECTORY_SEPARATOR);
define("DIR_UPLOAD_PROFILE", DIR_UPLOAD . "profile" . DIRECTORY_SEPARATOR);

/** ================================================================
 *  BASIC URLs
 * ================================================================== */
define("URL_SEPARATOR", "/");
define("PROTOCOL_BASE", (($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : "http") . "://");
define("URL_BASE", PROTOCOL_BASE . $_SERVER['HTTP_HOST'] . URL_SEPARATOR);
define("URL_ROOT_BASE", $_SERVER['HTTP_HOST']);
define("URL_REL_BASE", URL_SEPARATOR);

define("URL_CSS", URL_BASE . "assets" . URL_SEPARATOR . "css" . URL_SEPARATOR);
define("URL_JS", URL_BASE . "assets" . URL_SEPARATOR . "js" . URL_SEPARATOR);
define("URL_IMAGES", URL_BASE .  "assets" . URL_SEPARATOR."images" . URL_SEPARATOR);
define("URL_IMAGES_MEDIA", URL_IMAGES . "media" . URL_SEPARATOR);

define("URL_REL_CSS", URL_REL_BASE . "assets" . URL_SEPARATOR . "css" . URL_SEPARATOR);
define("URL_REL_JS", URL_REL_BASE . "assets" . URL_SEPARATOR . "js" . URL_SEPARATOR);
define("URL_REL_CMS_JS", URL_JS . "cms" . URL_SEPARATOR);


//if "myfile.php" is included in "PARENTFILE.php" , and you visit  "PARENTFILE.PHP?abc":
//__FILE__                   //🡺 /home/user/public_html/subFolder/myfile.php
//__DIR__                    //🡺 /home/user/public_html/subFolder              //same: dirname(__FILE__)    

/* * ================================================================
*            self-defined SERVER variables 
//=================================================== */
define('DOCUMENT_ROOT',$_SERVER["DOCUMENT_ROOT"]);  //🡺 /home/user/public_html
define('SERVER_ADDR',$_SERVER["SERVER_ADDR"]);    //🡺 143.34.112.23
define('SERVER_PORT',$_SERVER["SERVER_PORT"]);    //🡺 80(or 443 etc..)
define('REQUEST_SCHEME',$_SERVER["REQUEST_SCHEME"]); //🡺 https        //similar: $_SERVER["SERVER_PROTOCOL"] 
define('HTTP_HOST',$_SERVER['HTTP_HOST']);      //🡺         example.com (or with WWW)             //similar: $_SERVER["SERVER_NAME"]
define('REQUEST_URI',$_SERVER["REQUEST_URI"]);    //🡺                       /subFolder/myfile.php?var=blabla
define('QUERY_STRING',$_SERVER["QUERY_STRING"]);   //🡺                                             var=blabla
define('SCRIPT_FILENAME',$_SERVER["SCRIPT_FILENAME"]);  //🡺 /home/user/public_html/parentfile.php
define('PHP_SELF',$_SERVER["PHP_SELF"]);       //🡺                       /parentfile.php
parse_url(REQUEST_URI, PHP_URL_PATH); //🡺  /subFolder/myfile.php 
// define('DOMAIN',$hostBrk[1]);    //🡺  http://usedcardeko.com/

// ==================================================================//



/* * ================================================================
 *  MODEs of working
 * ================================================================== */
define("MODE_DEVELOPMENT", 1);
define("MODE_TEST", 2);
define("MODE_LIVE", 3);
define("MODE_MAINTENANCE", 4);
define("MODE_DEMONSTRATION", 5);

//define("ACTIVE_MODE", MODE_LIVE); // TEST, LIVE, DEVELOPMENT, MAINTENANCE
define("ACTIVE_MODE", MODE_DEVELOPMENT); // TEST, LIVE, DEVELOPMENT, MAINTENANCE, DEMONSTRATION
