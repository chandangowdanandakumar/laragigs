<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return  [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat voluptatum expedita voluptatibus nostrum fuga accusamus reprehenderit? Excepturi consectetur esse molestias labore sunt, aut earum quasi quaerat accusamus, distinctio expedita quas!',
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat voluptatum expedita voluptatibus nostrum fuga accusamus reprehenderit? Excepturi consectetur esse molestias labore sunt, aut earum quasi quaerat accusamus, distinctio expedita quas!',
            ],
        ];
    }

    public static function find($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id']== $id){
                return $listing;
            }
        }
        return 'not found';
    }
}
