<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{

    protected $model = News::class;


    public function definition()
    {
        return [
            'headline' => $this->faker->sentence,
            'newsbody' => $this->faker->text(100),
        ];
    }
}
