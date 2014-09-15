<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Application Debug Mode
	|--------------------------------------------------------------------------
	|
	| When your application is in debug mode, detailed error messages with
	| stack traces will be shown on every error that occurs within your
	| application. If disabled, a simple generic error page is shown.
	|
	*/

	'registration' => true,
	'userAgentLanguage' => false,
	'attachmentsDirectory' => storage_path() . '/attachments',
	'attachmentsPreview' => array(
		'resolution' => array(
			'x' => 500,
			'y' => 500
		),
		'directory' => storage_path() . '/attachments'
	),
	'tesseractTempDirectory' => storage_path() . '/cache',
);
