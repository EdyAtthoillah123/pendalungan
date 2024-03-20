<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('categorys')->insert([
            ['name' => 'iot', 'created_at' => $now],
            ['name' => 'multimedia', 'created_at' => $now],
            ['name' => 'software', 'created_at' => $now],
        ]);
    }
}
