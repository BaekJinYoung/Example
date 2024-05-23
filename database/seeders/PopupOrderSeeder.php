<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Popup;

class PopupOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $popups = Popup::all();
        $order = 1;

        foreach ($popups as $popup) {
            $popup->order = $order++;
            $popup->save();
        }
    }
}
