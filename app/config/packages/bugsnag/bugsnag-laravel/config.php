<?php

return [

	/*
	|--------------------------------------------------------------------------
	| API Key
	|--------------------------------------------------------------------------
	|
	| You can find your API key on your Bugsnag dashboard.
	|
	| This api key points the Bugsnag notifier to the project in your account
	| which should receive your application's uncaught exceptions.
	|
	*/
	'api_key' => getenv('BUGSNAG_KEY'),

	/*
	|--------------------------------------------------------------------------
	| Notify Release Stages
	|--------------------------------------------------------------------------
	|
	| Set which release stages should send notifications to Bugsnag.
	|
	| Example: array('development', 'production')
	|
	*/
	'notify_release_stages' => ['production'],

];
