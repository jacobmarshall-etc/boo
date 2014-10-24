<?php namespace Boo\Repositories\Photos;

use Boo\Repositories\EloquentRepository;
use Photo;

class EloquentPhotosRepository extends EloquentRepository implements PhotosRepository {

	/**
	 * @param Photo $model
	 */
	function __construct(Photo $model)
	{
		parent::__construct($model);
	}

} 
