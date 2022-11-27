<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table='books';
    protected $fillable = [
        'title',
        'author',
        'year',
        'synopsis',
        'image',
    ];

    


    public function bookCategories(): HasMany
    {
        return $this->hasMany(BookCategories::class, 'book_id', 'id');
    }
}
