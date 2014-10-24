<?php namespace Boo\Repositories\Users;

use Boo\Repositories\EloquentRepository;
use User;

class EloquentUsersRepository extends EloquentRepository implements UsersRepository {

	/**
	 * @param User $model
	 */
	function __construct(User $model)
	{
		parent::__construct($model);
	}

} 
