<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'book_name', 'book_aut','book_desc', 'book_avt', 'book_status'
    ];
    protected $primaryKey = 'book_id';
    protected $table = 'books';
}
