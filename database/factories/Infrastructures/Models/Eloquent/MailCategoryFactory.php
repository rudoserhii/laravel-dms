<?php

namespace Database\Factories\Infrastructures\Models\Eloquent;

use App\Infrastructures\Models\Eloquent\MailCategory;

use Illuminate\Database\Eloquent\Factories\Factory;

class MailCategoryFactory extends Factory
{
    protected $model = MailCategory::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'sort' => $this->faker->numberBetween(10, 100),
        ];
    }
}
