<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locales = [
            ['code' => 'uk', 'name' => 'Українська'],
            ['code' => 'ru', 'name' => 'Русский'],
            ['code' => 'en', 'name' => 'English'],
        ];

        DB::table('locales')->insert($locales);
    }
}
