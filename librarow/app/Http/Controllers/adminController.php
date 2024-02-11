<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'title' => 'Admin'
        ]);
    }
    public function student_data()
    {
        $users = User::all()
            ->where('role_id', '2');
        return view('admin.student_data', [
            'title' => 'Data Mahasiswa',
            'users' => $users
        ]);
    }
    public function librarian_data()
    {
        $admin = User::all()
            ->where('role_id', '1');
        return view('admin.librarian_data', [
            'title' => 'Data Admin',
            'admin' => $admin
        ]);
    }
    public function book_data()
    {
        $books = book::all();
        return view('admin.book_data', [
            'title' => 'Data Buku',
            'books' => $books
        ]);
    }
    public function book_edit($id)
    {
        $book = book::find($id);
        return view(
            'admin.book_edit',
            [
                'title' => 'Edit Buku',
                'book' => $book
            ]
        );
    }

    public function book_update(Request $request, $id)
    {
       $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category' => 'required',
            'available' => 'required',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        $book = book::find($id);

        if($request->hasFile('cover')){
            $filename = time().'.'.$request->file('cover')->getClientOriginalName();
            $request->file('cover')->move(public_path('img'), $filename);
            $validated['cover'] = $filename;
        }else{
            $validated['cover'] = $book->cover;
        }

        $book->title = $validated['title'];
        $book->author = $validated['author'];
        $book->category = $validated['category'];
        $book->available = $validated['available'];
        $book->cover = $validated['cover'];
        $book->save();

        return redirect(route('book-data'))->with('success', 'Data Buku Berhasil Diubah');
      
    }
}
