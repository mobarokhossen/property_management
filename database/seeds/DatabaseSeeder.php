<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->insert([
            'name' => 'Mobarok Hossen',
            'userName' => 'admin',
            'address' => 'Nikunja-2, Khilkhet',
            'password' => md5('password'),
            'role' => 'admin',
        ]);
    }
}
