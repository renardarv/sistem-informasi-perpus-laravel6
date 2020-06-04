<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{   
    protected $guarded = []; // tidak menggunakan protected $fillable  ['name'] supaya jika ada penambahan fitur maka tidak perlu lagi menambah $fillable

    public $timestamps = false;

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
