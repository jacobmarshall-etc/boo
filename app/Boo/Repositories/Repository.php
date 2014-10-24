<?php namespace Boo\Repositories;

interface Repository {

	/**
	 * @param $id
	 * @return \Illuminate\Support\Collection
	 */
	public function getById($id);

	/**
	 * @return \Illuminate\Support\Collection
	 */
	public function getAll();

} 
