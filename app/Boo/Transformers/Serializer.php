<?php namespace Boo\Transformers;

use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use League\Fractal\Serializer\ArraySerializer;

class Serializer {

	/**
	 * @var Manager
	 */
	protected $manager;

	/**
	 * Sets up the manager with the correct serializer.
	 *
	 * @param Manager $manager
	 */
	function __construct(Manager $manager)
	{
		$this->manager = $manager;

		// Use the basic ArraySerializer to remove additional bloat
		$this->manager->setSerializer(new ArraySerializer());
	}

	/**
	 * Serialises a transformed object (either a single item or a collection
	 * of items, each individually transformed).
	 *
	 * @param Item|Collection $resource
	 * @return array
	 */
	public function data($resource)
	{
		return $this->manager->createData($resource)->toArray();
	}

} 
