<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{

    protected $model = Image::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'posts/'.$this->faker->image('public/storage/posts', 640, 480, null, false) // true: almacena la uri completa public/storage/posts/example.jog - false: solo almacena el nombre y su extencion  example.jpg

        ];
    }
}
