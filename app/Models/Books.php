<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    public function details(){
        return $this->hasOne(Details::class, 'book_id', 'id');
    }

    public function categories(){
        return $this->hasOne(Categories::class, 'id', 'category_id');
    }
}
