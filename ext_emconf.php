<?php

########################################################################
# Extension Manager/Repository config file for ext: "gh_multitag"
#
# Auto generated 27-04-2009 17:59
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
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'vge_tagcloud' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:11:{s:9:"ChangeLog";s:4:"dde2";s:10:"README.txt";s:4:"85bd";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"0497";s:14:"ext_tables.php";s:4:"76e8";s:13:"locallang.xml";s:4:"16f7";s:59:"vgetagcloud_hooks/class.tx_ghmultitag_vgetagcloud_hooks.php";s:4:"7c8f";s:20:"static/constants.txt";s:4:"d41d";s:16:"static/setup.txt";s:4:"9ebf";s:19:"doc/wizard_form.dat";s:4:"9f2f";s:20:"doc/wizard_form.html";s:4:"1c5d";}',
	'suggests' => array(
	),
);

?>