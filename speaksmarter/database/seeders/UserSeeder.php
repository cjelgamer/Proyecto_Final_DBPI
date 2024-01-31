<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = User::create([
            'name'=>'admin',
            'email'=> 'admin@speaksmarter.net',
            'password'=> Hash::make('admin')

        ]);
        $admin->assignRole('admin');


        $editor = User::create([
            'name'=>'editor',
            'email'=> 'editor@speaksmarter.net',
            'password'=> Hash::make('editor')

        ]);
        $editor->assignRole('editor');


    }
}
