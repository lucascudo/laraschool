<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = new DateTime();
        $newUser = new User([
            "name" => "Admin",
            "email" => "admin@laraschool.com.br",
            "name" => "Admin",
            'password' => Hash::make(config('app.default_password')),
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        $newUser->save();
        $newUser->assignRole();

    }
}
