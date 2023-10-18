<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Color;

class Product extends Model
{
    use HasFactory;

    //Columnas llenables por el usuario
    protected $fillable = ['name','category_id','price','existance','description','user_id'];

    //Columnas no permitidas por el usuario
    //protected $guarded = ['id']

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
}
