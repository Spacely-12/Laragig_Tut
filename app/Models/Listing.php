<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    
    use HasFactory;


    public function scopeFilter($query, array $filters)
    { 
     //dd($filters['tag']);
        // if ($filters['tags'] ?? false){
        //     $query->where('tags', 'like', '%' . request('tag') . '%');
        // }
       // return view('listings/index');

       if ($filters['tag'] ?? false) {
        $query->where('tags', 'like', '%' . $filters['tag'] . '%');
    }

    if ($filters['search'] ?? false) {
        $query->where('title', 'like', '%' . $filters['search'] . '%')
        ->orWhere('description', 'like', '%' . $filters['search'] . '%')
        ->orWhere('tags', 'like', '%' . $filters['search'] . '%')
        ->orWhere('company', 'like', '%' . $filters['search'] . '%')
        ->orWhere('location', 'like', '%' . $filters['search'] . '%');
    }
    }   
}
