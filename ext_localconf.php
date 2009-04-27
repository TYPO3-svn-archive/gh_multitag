<?php
if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tx_vgetagcloud_pi1']['postProcessRawKeywords'][] = 'EXT:gh_multitag/vgetagcloud_hooks/class.tx_ghmultitag_vgetagcloud_hooks.php:tx_ghmultitag_vgetagcloud_hooks';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tx_vgetagcloud_pi1']['postProcessPages'][] = 'EXT:gh_multitag/vgetagcloud_hooks/class.tx_ghmultitag_vgetagcloud_hooks.php:tx_ghmultitag_vgetagcloud_hooks';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tx_vgetagcloud_pi1']['processTagData'][] = 'EXT:gh_multitag/vgetagcloud_hooks/class.tx_ghmultitag_vgetagcloud_hooks.php:tx_ghmultitag_vgetagcloud_hooks';

?>