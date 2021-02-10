<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            'id' => 1,
            'make' => 'Audi',
            'model' => '80',
            'year' => 1986,
            'description' => 'Neuzsiveda',
            'customer_id' => '1'
        ]);

        DB::table('bookings')->insert([
            'id' => 2,
            'make' => 'BMW',
            'model' => '320',
            'year' => 1990,
            'description' => 'Netraukia',
            'customer_id' => '2'
        ]);

    }
}
