<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Photo extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The addition columns to use as carbon objects.
	 *
	 * @var array
	 */
	protected $dates = ['published_at'];

} 
