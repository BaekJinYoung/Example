<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = Banner::all();
        $order = 1;

        foreach ($banners as $banner) {
            $banner->order = $order++;
            $banner->save();
        }
    }
}
