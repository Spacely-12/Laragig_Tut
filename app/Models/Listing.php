<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing 
{

    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Cupidatat dolore id consectetur velit fugiat quis fugiat fugiat occaecat ad duis ex laborum ex. Reprehenderit consectetur nostrud id sint commodo officia adipisicing mollit ea. Enim incididunt elit ullamco fugiat incididunt ex pariatur elit veniam commodo nisi duis.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Aute velit voluptate reprehenderit minim aliquip velit. Do magna pariatur fugiat ea est laborum ipsum elit aliquip. Enim irure mollit commodo qui velit. Deserunt minim nulla minim reprehenderit eu duis labore.'
            ]
        ];
    }
    public static function find($id){
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id){
                return $listing;
            }
        }
    }
    use HasFactory;
}
