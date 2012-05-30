<?php
/**
 * Documentation Configuration
 *
 * Please override any of these options in your own projects _config.php file.
 * For more information and documentation see docsviewer/docs/en
 */

if(!defined('DOCSVIEWER_PATH')) {
	define('DOCSVIEWER_PATH', dirname(__FILE__));
}

if(!defined('DOCSVIEWER_DIR')) {
	$dir = explode(DIRECTORY_SEPARATOR, DOCSVIEWER_PATH);

	define('DOCSVIEWER_DIR', array_pop($dir));
}

// define filetypes to ignore
DocumentationService::set_ignored_files(array(
	'.', '..', '.DS_Store',
	'.svn', '.git', 'assets', 'themes', '_images', '_resources'
));

# Replace Help section in CMS?
if (!defined('DOCSVIEWER_REPLACE_HELP')) {
	define('DOCSVIEWER_REPLACE_HELP', false);
}
if (DOCSVIEWER_REPLACE_HELP) {
	LeftAndMain::$help_link = '/' . trim(DOCSVIEWER_URL, '/');
}
