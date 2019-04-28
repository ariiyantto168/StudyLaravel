<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $save_user = new User;
        $save_user->name = 'Admin';
        $save_user->email = 'admin@gmail.com';
        $save_user->password = bcrypt('123456');
        $save_user->role = 'a';
        $save_user->save();
    }
}
