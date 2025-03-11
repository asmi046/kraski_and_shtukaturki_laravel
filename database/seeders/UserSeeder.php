<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table("users")->insertGetId(
            [
                    'name' => "Супер Админ",
                    'email' => "asmi046_1@gmail.com",
                    'password' => Hash::make("123"),
                    'permissions' => '{"platform.systems.roles":true,"platform.systems.users":true,"platform.systems.attachment":true,"platform.index":true}',
                    'email_verified_at' => date("Y-m-d H:i:s")
            ]
        );
    }
}
