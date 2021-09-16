<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LeadActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\LeadAction::factory()->count(50)->create();
    }
}
