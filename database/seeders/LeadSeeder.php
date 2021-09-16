<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Lead::factory()->count(20)->create();
    }
}
