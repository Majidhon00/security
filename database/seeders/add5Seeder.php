<?php

namespace Database\Seeders;

use App\Models\add5;
use Illuminate\Database\Seeder;

class add5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        add5::factory(5)->create();
        
    }
}
