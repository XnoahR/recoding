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

    public function book_store(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category' => 'required',
            'available' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ],[
            'title.required' => 'The title field is required',
            'author.required' => 'The author field is required',
            'category.required' => 'The category field is required',
            'available.required' => 'The available field is required',
            'cover.required' => 'The cover field is required'
        ]);

        $filename = time().'.'.$request->file('cover')->getClientOriginalName();
        $request->file('cover')->move(public_path('img'), $filename);
        $validated['cover'] = $filename;

        book::create($validated);
        return redirect(route('book-data'))->with('success', 'Data Buku Berhasil Ditambahkan');
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

    public function book_delete($id){
        $book = book::find($id);
        $book->delete();
        return redirect(route('book-data'))->with('success', 'Data Buku Berhasil Dihapus');
    }
}
