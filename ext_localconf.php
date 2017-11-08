<?php

// Register post user lookup hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauth.php']['postUserLookUp'][] =
	\SchamsNet\BeLoginHook\Hook\UserLoginHook::class . '->postUserLookUp';

// Configure logging API
$logging = array(
	\TYPO3\CMS\Core\Log\LogLevel::INFO => array(
		// Add a FileWriter
		'TYPO3\\CMS\\Core\\Log\\Writer\\FileWriter' => array(
			// Configuration for the writer
			'logFile' => 'typo3temp/logs/be_login_hook.log'
		)
	)
);

// Enable logging
$GLOBALS['TYPO3_CONF_VARS']['LOG']['SchamsNet']['BeLoginHook']['Hook']['writerConfiguration'] = $logging;

unset($logging);
