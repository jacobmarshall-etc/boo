<?php namespace Boo\Transformers;

use League\Fractal\TransformerAbstract;
use Photo;

class PhotoTransformer extends TransformerAbstract {

	public function transform(Photo $photo)
	{
		return [
			'id'       => $photo->id,
			'caption'  => $photo->caption,
			'type'     => $photo->type,
			'image'    => $photo->image_standard,
			'image_2x' => $photo->image_retina
		];
	}

}
