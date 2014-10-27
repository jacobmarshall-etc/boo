<?php namespace Boo\Providers;

use Illuminate\Support\ServiceProvider;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\SyslogHandler;
use Log;

class PapertrailServiceProvider extends ServiceProvider {

	/**
	 * Integrates the Laravel logger with Papertrail.
	 *
	 * @see http://mattstauffer.co/blog/laravel-forge-logging-with-papertrail
	 */
	public function boot()
	{
		$log = Log::getMonolog();
		$papertrail = new SyslogHandler('papertrail');

		$formatter = new LineFormatter('%channel%.%level_name%: %message% %extra%');
		$papertrail->setFormatter($formatter);

		$log->pushHandler($papertrail);
	}

	/**
	 * @return void
	 */
	public function register() {}

}
