<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
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
}

