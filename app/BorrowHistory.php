<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowHistory extends Model
{
    protected $table = 'borrow_history';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'id', 'admin_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function scopeIsBorrowed($query) // menggunakan scope untuk fungsi isBorrowed
    {
        return $query->where('returned_at', null);
    }
}
