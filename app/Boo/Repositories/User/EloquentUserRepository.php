<?php namespace Boo\Repositories\User;

use Boo\Repositories\EloquentRepository;
use User;

class EloquentUserRepository extends EloquentRepository implements UserRepository {

	/**
	 * @param User $model
	 */
	function __construct(User $model)
	{
		parent::__construct($model);
	}

} 