<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FirmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Firm::factory()->count(10)->create();
    }
}
