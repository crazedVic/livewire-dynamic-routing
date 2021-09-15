<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Document::factory()->count(200)->create();
    }
}
