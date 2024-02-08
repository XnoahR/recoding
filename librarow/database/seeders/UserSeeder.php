<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Ray',
            'email' => 'ray@member.com',
            'password' => Hash::make('raychi'),
            'phone' => '081234567890',
            'nim' => 'M0521062',
            'role_id' => 2,
            'status_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Felix',
            'email' => 'felix@member.com',
            'password' => Hash::make('zemdegs'),
            'phone' => '081123241234',
            'nim' => 'M0521001',
            'role_id' => 2,
            'status_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Rena',
            'email' => 'rena@member.com',
            'password' => Hash::make('ariabl'),
            'phone' => '085214567891',
            'nim' => 'M0521063',
            'role_id' => 2,
            'status_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'lucas',
            'email' => 'lucas@member.com',
            'password' => Hash::make('frost'),
            'phone' => '081234567891',
            'nim' => 'M0521030',
            'role_id' => 2,
            'status_id' => 1,
        ]);

    }
}
