<?php

namespace App\Http\Controllers;

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
    public function data_mahasiswa()
    {
        $users = User::all()
            ->where('role_id','2');
        return view('admin.data_mahasiswa', [
            'title' => 'Data Mahasiswa',
            'users' => $users
        ]);
    }
    public function data_admin()
    {
        $admin = User::all()
            ->where('role_id','1'); 
        return view('admin.data_admin', [
            'title' => 'Data Admin',
            'admin' => $admin
        ]);
    }
    public function data_buku()
    {
        return view('admin.data_buku', [
            'title' => 'Data Buku'
        ]);
    }
}
