<?php namespace Boo\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Boo\Repositories\User\UserRepository', 'Boo\Repositories\User\EloquentUserRepository');
	}

}
