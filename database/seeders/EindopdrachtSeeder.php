<?php

namespace Database\Seeders;

use App\Models\Demo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EindopdrachtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Demo::create([
            'name' => 'celeste',
            'description' => 'lastig platformer spel',
            'aantalDownloads' => '2000000',
            'prijs' => '9.99',
        ]);
        Demo::create([
            'name' => 'dead cells',
            'description' => 'roguelite metroidvania spel',
            'aantalDownloads' => '150000',
            'prijs' => '29.99',
        ]);
    }
}
