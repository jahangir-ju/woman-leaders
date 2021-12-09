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
        DB::table('admins')->insert([

           
                'name'      => 'Admin',
                'username'  => 'admin',
                'email'     =>'admin@gmail.com',
                'phone'     =>'01947661208',
                'password'  => Hash::make('admin123'),
            
          ]);
    }
}
