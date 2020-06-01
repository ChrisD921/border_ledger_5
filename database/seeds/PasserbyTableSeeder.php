<?php

use Illuminate\Database\Seeder;
use App\Passerby;

class PasserbyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
        
        $p1 = new Passerby;

        $p1->pass_first_name = "Test";
        $p1->pass_last_name = "Traveller";
        $p1->pass_age= 20;
        $p1->pass_id_type="Driver's License";
        $p1->pass_id_num = "20201234";
        $p1->pass_trans_mode = "Private Vehicle";
        $p1->pass_plate_num="XYZ-123";
        $p1->pass_purpose="Going Home";
        $p1->pass_des="Going back home after a week's work in the mountains.";
        $p1->pass_border="Osmena Bridge";
        $p1->pass_ingoing_or_outgoing=0;
        $p1->save(); 


        $p2 = new Passerby;

        $p2->pass_first_name = "Test";
        $p2->pass_last_name = "Traveller";
        $p2->pass_age= 20;
        $p2->pass_id_type="Driver's License";
        $p2->pass_id_num = "20201234";
        $p2->pass_trans_mode = "Company Vehicle";
        $p2->pass_plate_num="XYZ-123";
        $p2->pass_purpose="Going To Work";
        $p2->pass_des="Going to work for a week in the Mountains.";
        $p2->pass_border="H. Abellana Street (Canduman-Talamban)";
        $p2->pass_ingoing_or_outgoing=1;
        $p2->save(); 

        
    }
}
