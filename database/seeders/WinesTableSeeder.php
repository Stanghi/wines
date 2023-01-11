<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wine;

class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents('https://api.sampleapis.com/wines/reds');
        $data = json_decode($data);
        foreach ($data as $wine) {
            $new_wine = new Wine();
            $new_wine->name = $wine->wine;
            $new_wine->slug = Wine::generateSlug($new_wine->name);
            $new_wine->winery = $wine->winery;
            $new_wine->rating = $wine->rating->average;
            $new_wine->location = $wine->location;
            $new_wine->image = $wine->image;
            $new_wine->save();
        }
    }
}
