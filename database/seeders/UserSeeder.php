<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            'name'=>'Admin DPMD Jombang',
            'level'=>'super',
            'email'=>'admin@admin.com',
            'telp'=>'088888888',
            'username'=>'admin',
            'password'=>bcrypt('admin')
        ]);
    }
}