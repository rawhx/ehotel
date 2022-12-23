<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'hasbil',
            'email'=>'admin@gmail.com',
            'lvl'=>'admin',
            'password'=>bcrypt('12345678')
        ]);

    }
}
