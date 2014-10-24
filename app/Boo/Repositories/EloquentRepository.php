<?php namespace Boo\Repositories;

use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class EloquentRepository {

	/**
	 * @var Eloquent
	 */
	protected $model;

	/**
	 * @param Eloquent $model
	 */
	function __construct(Eloquent $model)
	{
		$this->model = $model;
	}

	/**
	 * {@inheritdoc}
	 */
	function getById($id)
	{
		return $this->model->findOrFail($id);
	}

	/**
	 * {@inheritdoc}
	 */
	function getAll()
	{
		return $this->model->all();
	}

}
