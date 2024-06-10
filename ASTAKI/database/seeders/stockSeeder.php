<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\stock;

class stockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        stock::create([
            "item_Name" => "Kertas Minyak",
            "stock" => "20",
            "acquired_Price" => "24000",
            "selling_Price" => "29000",
            "documentation" => "\private\Kertas Minyak\doc"
        ]);
    }
}
