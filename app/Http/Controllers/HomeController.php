<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $all_books = Book::orderby('book_id', 'DESC')->get();
        return view('pages.home')->with(compact('all_books'));
    }
    public function bookDetail($book_id) {
        $book_detail = Book::where('book_id', $book_id)->get();
        return view('pages.book_detail')->with(compact('book_detail'));
    }
}
