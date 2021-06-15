<?php

namespace Database\Seeders;
use App\Models\User;
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
        User::create([
           'name'=>'juan david ruales',
           'email'=>'rualez301628@gmail.com',
           'password'=> bcrypt('cali1234')
        ]);
        User::factory(5)->create();

    }
}
