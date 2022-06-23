<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = User::first();
        if($response == null){
            User::create([
                'name' => 'admin',
                'role' => 'ADMIN',
                'score' => 0,
                'remember_token' => Str::random(10),
                'password' => bcrypt('1234'),

            ]);
            User::factory()->count(10)->create();
        }
    }
}
