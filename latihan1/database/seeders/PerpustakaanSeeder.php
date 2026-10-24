<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Anggota;

class PerpustakaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Buku::factory(50)->create();

        // Seed data for Anggota
        \App\Models\Anggota::factory(10)->create();
    }
}
