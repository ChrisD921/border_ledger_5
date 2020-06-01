<?php

use Illuminate\Database\Seeder;

class BorderNameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('border')->insert([
            'id' => "Osmena Bridge",
            'pass_border' => "Osmena Bridge",
        ]);
    
        DB::table('border')->insert([
            'id' => "H. Abellana Street (Canduman-Talamban)",
            'pass_border' => "H. Abellana Street (Canduman-Talamban)",
        ]);
    }
}
