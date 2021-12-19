<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'phone'     => '01947661208',
            'gender'    => 0,
            'role'      => 1,
            'password'  => Hash::make('12345678'),
        ]);
    }
}
