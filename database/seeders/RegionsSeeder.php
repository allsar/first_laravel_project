<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents(base_path('database/sql/Result_1.sql')));
        DB::unprepared(file_get_contents(base_path('database/sql/Result_4.sql')));
        DB::unprepared(file_get_contents(base_path('database/sql/Result_2.sql')));
        DB::unprepared(file_get_contents(base_path('database/sql/Result_14.sql')));
        DB::unprepared(file_get_contents(base_path('database/sql/Result_8.sql')));
        DB::unprepared(file_get_contents(base_path('database/sql/Result_3.sql')));
        DB::unprepared(file_get_contents(base_path('database/sql/Result_5.sql')));
        DB::unprepared(file_get_contents(base_path('database/sql/Result_6.sql')));
        DB::unprepared(file_get_contents(base_path('database/sql/Result_7.sql')));
//        DB::unprepared(file_get_contents(base_path('database/sql/Result_15.sql')));
//        zip dan chiqarish kerak
    }
}
