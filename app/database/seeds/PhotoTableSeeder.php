<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PhotoTableSeeder extends Seeder {

	public function run()
	{
		Photo::create([
			'id' => 'uTuo4xKFxB',
			'type' => 'image',
			'caption' => 'this is what happens if you leave your undershirts on the floor, jake',
			'image_standard' => 'https://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10724948_761775723902472_367321429_a.jpg',
			'image_retina' => 'https://scontent-b.cdninstagram.com/hphotos-xfa1/t51.2885-15/10724948_761775723902472_367321429_n.jpg',
			'published_at' => Carbon::createFromTimestamp(1413666255)
		]);
	}

}
