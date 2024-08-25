<?php

namespace Database\Factories;

use App\JobSchedule;
use App\Models\Employer;
use App\SalaryType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title'=>fake()->jobTitle(),
            'salary'=>fake()->numberBetween(1000, 10000),
            'salary_type'=> fake()->randomElement(SalaryType::cases()),
            'location'=>fake()->city(),
            'company'=> fake()->company(),
            'description'=> fake()->text(200),
            'schedule'=> fake()->randomElement(JobSchedule::cases()),
            'url'=> fake()->url(),
            'featured'=> fake()->boolean(),
            'employer_id'=> Employer::factory()
        ];
    }
}
