<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // IMPORTO IL SEEDER PER POTERLO INSERIRE NELLA TABELLA IN QUESTO MODO
        $this->call(TrainsTableSeeder::class);
    }
}
