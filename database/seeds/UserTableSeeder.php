<?php

use Illuminate\Database\Seeder;
use App\Personnel;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $p1 = new Personnel;

        $p1->first_name = "Admin";
        $p1->last_name = "Admin";
        $p1->date_of_birth='2020-05-28 11:05:46';
        $p1->email= "admin@gmail.com";
        $p1->password =Hash::make("admin1234"); 
        $p1->is_admin=1;
        $p1->save(); 


        $p2 = new Personnel;

        $p2->first_name = "John";
        $p2->last_name = "Doe";
        $p2->date_of_birth='2020-05-28 11:05:46';
        $p2->email= "user@gmail.com";
        $p2->password =Hash::make("user1234"); 
        $p2->is_admin=0;
        $p2->save(); 

    }
}
