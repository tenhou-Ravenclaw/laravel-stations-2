<?php

namespace Database\Seeders;

use App\Practice;
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
        // ここに Seeder を追加する
        Practice::factory(10)->create();
    }
}
