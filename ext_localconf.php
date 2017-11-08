<?php

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauth.php']['postUserLookUp'][] =
	\SchamsNet\BeLoginHook\Hook\UserLoginHook::class . '->postUserLookUp';

// Logging API
$logging = array(
	// configuration for ERROR level log entries
	\TYPO3\CMS\Core\Log\LogLevel::INFO => array(
		// add a FileWriter
		'TYPO3\\CMS\\Core\\Log\\Writer\\FileWriter' => array(
			// configuration for the writer
			'logFile' => 'typo3temp/logs/be_login_hook.log'
		)
	)
);

// ...
$GLOBALS['TYPO3_CONF_VARS']['LOG']['SchamsNet']['BeLoginHook']['Hook']['writerConfiguration'] = $logging;

unset($logging);
