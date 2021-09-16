<?php

namespace Database\Seeders;

use App\Models\LeadAction;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(FirmSeeder::class);
        $this->call(DocumentSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(NoteSeeder::class);
        $this->call(LeadSeeder::class);
        $this->call(LeadActionSeeder::class);

    }
}
