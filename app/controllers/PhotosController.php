<?php

use Boo\Repositories\Photos\PhotosRepository;
use Boo\Transformers\PhotoTransformer;
use Boo\Transformers\Serializer;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class PhotosController extends BaseController {

	/**
	 * @param PhotosRepository $photos
	 * @param Serializer $serializer
	 */
	function __construct(PhotosRepository $photos, Serializer $serializer)
	{
		$this->photos = $photos;
		$this->serializer = $serializer;
	}

	/**
	 * Display all the photos.
	 *
	 * @return mixed
	 */
	public function index()
	{
		$photos = $this->photos->getAll();

		$resource = new Collection($photos, new PhotoTransformer());

		return $this->serializer->data($resource);
	}

	/**
	 * Display a specified photo.
	 *
	 * @param string $id
	 * @return mixed
	 */
	public function show($id)
	{
		$photo = $this->photos->getById($id);

		$resource = new Item($photo, new PhotoTransformer());

		return $this->serializer->data($resource);
	}

}
