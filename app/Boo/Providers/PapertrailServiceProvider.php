<?php namespace Boo\Providers;

use Illuminate\Support\ServiceProvider;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\SyslogHandler;

class PapertrailServiceProvider extends ServiceProvider {

	/**
	 * Integrates the Laravel logger with Papertrail.
	 *
	 * @see http://mattstauffer.co/blog/laravel-forge-logging-with-papertrail
	 */
	public function register()
	{
		$monolog = Log::getMonolog();
		$syslog = new SyslogHandler('papertrail');

		$formatter = new LineFormatter('%channel%.%level_name%: %message% %extra%');
		$syslog->setFormatter($formatter);

		$monolog->pushHandler($syslog);
	}

}
