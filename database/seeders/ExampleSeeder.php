<?php

namespace Database\Seeders;

use App\Models\Examples;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Examples::factory()
            ->count(100)
            ->create();
    }
}
