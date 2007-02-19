<?php
//
//	$Id$
//

if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

//get EXT path
$PATH_timtab_theme_marinee = t3lib_extMgm::extPath('timtab_theme_marinee');

if (TYPO3_MODE == 'FE')	{
	require_once($PATH_timtab_theme_marinee.'class.tx_timtabthememarinee_fe.php');
}

//registering for several hooks
$TYPO3_CONF_VARS['EXTCONF']['tt_news']['extraItemMarkerHook'][]      = 'tx_timtabthememarinee_fe';
$TYPO3_CONF_VARS['EXTCONF']['ve_guestbook']['extraItemMarkerHook'][] = 'tx_timtabthememarinee_fe';

?>