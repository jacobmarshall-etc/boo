<?php namespace Boo\Repositories\User;

interface UserRepository {

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
