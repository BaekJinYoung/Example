<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patent;

class PatentOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patents = Patent::all();
        $order = 1;

        foreach ($patents as $patent) {
            $patent->order = $order++;
            $patent->save();
        }
    }
}
