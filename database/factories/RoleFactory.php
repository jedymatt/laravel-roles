<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $displayName = str(fake()->unique()->words(2, true))->title();

        return [
            'name' => $displayName->slug()->toString(),
            'display_name' => $displayName->toString(),
        ];
    }
}
