<?php

namespace Database\Factories;

use App\Models\Document;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Document::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'documentof_id' => rand(1,10),
            'documentof_type' => "App\Models\\" . $this->faker->randomElement([
                "Note",
                "Employee",
                "Document",
                "Firm"]),
            'name' => "Document: " . $this->faker->sentence(),
            'description' => $this->faker->paragraph(3),
            'dept' => $this->faker->randomElement([
                "HR",
                "Finance",
                "Operations",
                "Legal",
                "Marketing"]),
        ];
    }
}
