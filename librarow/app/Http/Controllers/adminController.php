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
            ->where('role_id','2');
        return view('admin.student_data', [
            'title' => 'Data Mahasiswa',
            'users' => $users
        ]);
    }
    public function librarian_data()
    {
        $admin = User::all()
            ->where('role_id','1'); 
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
}
