<?php
require_once( __DIR__ . '/../../../maintenance/commandLine.inc' );

foreach ( $wgLocalDatabases as $db ) {
	print "$db\n";
}
