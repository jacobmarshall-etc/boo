<?php namespace Boo\Repositories\Photo;

use Boo\Repositories\EloquentRepository;
use Photo;

class EloquentPhotoRepository extends EloquentRepository implements PhotoRepository {

	/**
	 * @param Photo $model
	 */
	function __construct(Photo $model)
	{
		parent::__construct($model);
	}

} 
