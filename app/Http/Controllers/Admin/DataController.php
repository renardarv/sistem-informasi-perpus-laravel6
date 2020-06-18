<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function authors()
    {
        $authors = Author::orderby('name', 'ASC');

        // untuk menggunakan fungsi latest() harus memiliki data type cerate_at pada table
        return datatables()->of($authors)
            ->addColumn('action', 'admin.author.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson(); 
    }

    public function books()
    {
        $books = Book::orderby('title', 'ASC');

        // untuk menggunakan fungsi latest() harus memiliki data type cerate_at pada table
        return datatables()->of($books)
            ->addColumn('author', function(Book $model){
                return $model->author->name;
            })
            ->editColumn('cover', function(Book $model) {
                return '<img src="'. $model->getCover() .'" height="150px">';
            })
            ->addColumn('action', 'admin.book.action')
            ->addIndexColumn()
            ->rawColumns(['cover', 'action'])
            ->toJson(); 
    }

    public function borrows()
    {
        $borrows = BorrowHistory::isBorrowed()->latest();

        return datatables()->of($borrows)
            // untuk memanggil user pada data view index borrow
            ->addColumn('user', function(BorrowHistory $model){
                return $model->user->name;
            })
            ->addColumn('book_title', function(BorrowHistory $model){
                return $model->book->title;
            })
            ->addColumn('action', 'admin.borrow.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson(); 
    }
}

