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
		$this->app->bind('Boo\Repositories\Users\UsersRepository', 'Boo\Repositories\Users\EloquentUsersRepository');
		$this->app->bind('Boo\Repositories\Photos\PhotosRepository', 'Boo\Repositories\Photos\EloquentPhotosRepository');
	}

}
