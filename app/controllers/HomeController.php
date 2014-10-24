<?php

use Boo\Repositories\Photos\PhotosRepository;

class HomeController extends BaseController {

	function __construct(PhotosRepository $photos)
	{
		$this->photos = $photos;
	}

	public function index()
	{
		$photos = $this->photos->getAll();

		return View::make('home.index', compact('photos'));
	}

}
