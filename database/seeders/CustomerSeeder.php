<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'id' => 1,
            'name' => 'Jonas',
            'surname' => 'Jonaitis',
            'email' => 'jonas@gmail.com',
            'phone' => '+370123456789',
        ]);

        DB::table('customers')->insert([
            'id' => 2,
            'name' => 'Petras',
            'surname' => 'Petraitis',
            'email' => 'destroyeris3000@gmail.com',
            'phone' => '+370987654321',
        ]);
        
    }
}
