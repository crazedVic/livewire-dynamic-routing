<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'noteof_id' => rand(1,10),
            'noteof_type' => "App\Models\\" . $this->faker->randomElement([
                "Note",
                "Employee",
                "Document",
                "Firm"]),
            'name' => "Note: " . $this->faker->sentence(),
            'description' => $this->faker->paragraph(3)
        ];
    }
}
