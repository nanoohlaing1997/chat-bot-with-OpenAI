<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'first_name' => fake()->firstName(),
			'last_name' => fake()->lastName(),
			'email' => fake()->unique()->safeEmail(),
			'phone' => '09' . fake()->randomNumber(8),
			'address' => fake()->address(),
			'salary' => fake()->randomNumber(6),
		];
	}
}
