<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected  $fillable = [
        'category_id',
        'status'
    ];
    public function category()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }


}
