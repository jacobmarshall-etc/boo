<?php namespace Boo\Repositories\User;

interface UserRepository {

	/**
	 * @param $id
	 * @return mixed
	 */
	public function getById($id);

	/**
	 * @return mixed
	 */
	public function getAll();

}