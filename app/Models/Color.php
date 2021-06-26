<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Color extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //Relacion muchos a muchos
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }
}
