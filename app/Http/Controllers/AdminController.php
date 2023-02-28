<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function showAdminPage(){
        
        return view('adminpages.home');
    }

    public function showAddPage(){
        
        return view('adminpages.add_book');
    }

    public function showListPage(){
        $all_books = Book::orderby('book_id', 'DESC')->get();
        return view('adminpages.list_book')->with(compact('all_books'));
    }

    public function addBook(Request $request){
        $data =$request->all();
        

        // $get_avt = $request->file('book_avt');
        // if ($get_avt) {
            // $get_name_avt = $get_avt->getClientOriginalName();
        //     $name_avt = current(explode('.', $get_name_avt));
        //     $new_avt = $name_avt.rand(0,99).'.'.$get_avt->getClientOriginalExtension();
        //     $get_avt->move('public/upload/product', $new_avt);
            $book = new Book();
            $book->book_name = $data['book_name'];
            $book->book_aut = $data['book_aut'];
            $book->book_desc = $data['book_desc'];
            $book->book_avt = $data['book_avt'];
            $book->book_status = 0;
            $book->save();
            Session::put('message', 'Thêm mới sách thành công');
            return Redirect::to('add-book');  
        // }else {
        //     Session::put('message', 'Hãy thêm hình ảnh cho sách');
        //     return Redirect::to('add-book');
        // } 
        
          

    }
}
