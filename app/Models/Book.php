<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory ;

    protected $fillable=[
           'title',
           'author',
           'genre',
           'description',
           'publication_year',
           'total_copies',
           'availbale_copies',
           'create_at',
           'update_at',
    ];
}
