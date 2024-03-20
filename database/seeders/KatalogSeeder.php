<?php

namespace Database\Seeders;

use App\Models\Katalog;
use Illuminate\Database\Seeder;

class KatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Katalog::factory()->count(10)->create();
    }
}
