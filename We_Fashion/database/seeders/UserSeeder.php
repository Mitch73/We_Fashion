<?php

namespace Database\Seeders;
 
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Database\Factories\UserFactory;
use Illuminate\Support\Str;
 
class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'michel';
        $user->email = 'michel@gmail.com';
        $user->password = Hash::make('michel075');
        $user->save();
    }
}