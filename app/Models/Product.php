<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    //Columnas llenables por el usuario
    protected $fillable = ['name','category_id','price','existance','description'];

    //Columnas no permitidas por el usuario
    //protected $guarded = ['id']

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
