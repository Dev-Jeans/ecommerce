<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','image','icon'];

        
    //relacion uno a muchos
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    //Relacion muchos a muchos
    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    //Relacion uno a muchos a traves de una tabla
    public function products()
    {
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
}
