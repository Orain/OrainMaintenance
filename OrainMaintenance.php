<?php
if ( !defined( 'MEDIAWIKI' ) ) {
    die( 'Not a valid entry point.' );
}

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'OrainMaintenance',
	'descriptionmsg' => 'orainmaintenance-desc',
	'version' => '1.1',
	'author' => array( 'Wikimedia', 'John Lewis', 'Southparkfan' ),
	'url' => 'https://github.com/Orain/OrainMaintenance',
	'license-name' => 'LICENSE',
);

$wgMessagesDirs['OrainMaintenance'] = __DIR__ . '/i18n';
