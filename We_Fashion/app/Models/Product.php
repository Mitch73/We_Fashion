<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    protected $fillable = [ "name", "picture", "content" ]; // Question: puisque j'ai rajouté (middleware('auth))
    // dans ma route est-ce qu'il faut rajouter cette partie de la ligne 17? 
}
