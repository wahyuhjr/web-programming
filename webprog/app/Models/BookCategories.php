<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookCategories extends Model
{
    use HasFactory;
    protected $table='book_categories';
    protected $fillable = [
        'book_id',
        'categories_id',
    ];

    

    public function categories(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function books(): HasOne
    {
        return $this->hasOne(Books::class, 'id', 'book_id');
    }
}
