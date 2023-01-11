<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Wine extends Model
{
    use HasFactory;

    public static function generateSlug($string){

        $slug = Str::slug($string, '-');

        $original_slug = $slug;

        $wine_exists = Wine::where('slug', $slug)->first();

        $c = 1;

        while($wine_exists){


            $slug = $original_slug . '-' . $c;
            $c++;

            $wine_exists = Wine::where('slug', $slug)->first();


        }

        return $slug;

    }
}
