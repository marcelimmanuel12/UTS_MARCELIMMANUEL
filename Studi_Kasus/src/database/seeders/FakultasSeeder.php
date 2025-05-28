<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fakultas::firstOrCreate([
            'name_fakultas' => 'Fakultas Ilmu Komputer',
            'code_fakultas' => '123',
            'Dekan_fakultas' => 'Marcel'
        ]);
    }
}
