<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{   
    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function getCover() 
    {   
        // untuk cover yang diambil dari seeder
        if (substr($this->cover,0,5) == "https") 
        {

            return $this->cover;
        }

        // untuk cover yang diupload 
        if ($this->cover) 
        {
            return asset($this->cover);
        }

        // cover kosong saat diupload
        return 'https://via.placeholder.com/150x200.png?text=No+Cover';
    }

    public function borrowed() 
    {
        return $this->belongsToMany(User::class, 'borrow_history')->withTimestamps();
    }

    public function scopeIsStillBorrow($query, $bookId)
    {
        return $query->where('books.id', $bookId)
                     ->where('returned_at', null)
                     ->count() > 0;
    }
}
