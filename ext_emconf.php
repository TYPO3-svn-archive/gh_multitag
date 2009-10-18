<?php

########################################################################
# Extension Manager/Repository config file for ext: "gh_multitag"
#
# Auto generated 17-10-2009 10:11
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Multi Tag Search for vge_tagcloud',
	'description' => 'Extends vge_tagcloud with a search using more than one tag.',
	'category' => 'plugin',
	'author' => 'Gregor Hermens',
	'author_email' => 'gregor@a-mazing.de',
	'shy' => '',
	'dependencies' => 'vge_tagcloud',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.1.1',
	'constraints' => array(
		'depends' => array(
			'vge_tagcloud' => '1.4.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:12:{s:9:"ChangeLog";s:4:"2876";s:10:"README.txt";s:4:"85bd";s:12:"ext_icon.gif";s:4:"a9c5";s:17:"ext_localconf.php";s:4:"c912";s:14:"ext_tables.php";s:4:"76e8";s:13:"locallang.xml";s:4:"16f7";s:59:"vgetagcloud_hooks/class.tx_ghmultitag_vgetagcloud_hooks.php";s:4:"e3ed";s:20:"static/constants.txt";s:4:"d41d";s:16:"static/setup.txt";s:4:"e53b";s:14:"doc/manual.sxw";s:4:"a2b6";s:19:"doc/wizard_form.dat";s:4:"9f2f";s:20:"doc/wizard_form.html";s:4:"1c5d";}',
	'suggests' => array(
	),
);

?>