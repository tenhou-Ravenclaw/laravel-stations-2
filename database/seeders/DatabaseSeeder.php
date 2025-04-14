<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Practice;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ここに Seeder を追加する
        Practice::factory(10)->create();
    }
}
