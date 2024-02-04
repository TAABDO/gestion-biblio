<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable=[

        'description',
        'reservation_date',
        'return_date',
        'user_id',
        'book_id',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function book()
    {
        return $this->belongsTo(Book::class);

    }
}
