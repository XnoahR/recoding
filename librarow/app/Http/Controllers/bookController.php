<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    //
    public function index($id)
    {
        $book = book::where('id', $id)->get();

        return view('user.borrow_book',[
            'title' => 'Borrow Buku',
            'book' => $book
        ]);
    }

    

}
