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

        $p1->pass_first_name = "Carlos";
        $p1->pass_last_name = "Mendoza";
        $p1->pass_age= 20;
        $p1->pass_id_type="Driver's License";
        $p1->pass_id_num = "20201234";
        $p1->pass_trans_mode = "Private Vehicle";
        $p1->pass_plate_num="XYZ-123";
        $p1->pass_purpose="Going Home";
        $p1->pass_des="Holy Family Village";
        $p1->pass_border="Osmena Bridge";
        $p1->pass_ingoing_or_outgoing=0;
        $p1->save(); 


        $p2 = new Passerby;

        $p2->pass_first_name = "Carlos";
        $p2->pass_last_name = "Mendoza";
        $p2->pass_age= 20;
        $p2->pass_id_type="Driver's License";
        $p2->pass_id_num = "20201234";
        $p2->pass_trans_mode = "Company Vehicle";
        $p2->pass_plate_num="XYZ-123";
        $p2->pass_purpose="Going To Work";
        $p2->pass_des="Daanbantayan";
        $p2->pass_border="H. Abellana Street (Canduman-Talamban)";
        $p2->pass_ingoing_or_outgoing=1;
        $p2->save(); 

        // $p3 = new Passerby;

        // $p3->pass_first_name = "Victor";
        // $p3->pass_last_name = "Lopez";
        // $p3->pass_age= 25;
        // $p3->pass_id_type="Passport";
        // $p3->pass_id_num = "P4274425A";
        // $p3->pass_trans_mode = "Walking";
        // $p3->pass_plate_num="-";
        // $p3->pass_purpose="Visiting Relatives";
        // $p3->pass_des="Santo Nino Village";
        // $p3->pass_border="Tabunan";
        // $p3->pass_ingoing_or_outgoing=0;
        // $p3->save(); 

        // $p4 = new Passerby;

        // $p4->pass_first_name = "Elizabeth";
        // $p4->pass_last_name = "Go";
        // $p4->pass_age= 119;
        // $p4->pass_id_type="Passport";
        // $p4->pass_id_num = "P5589123A";
        // $p4->pass_trans_mode = "Private Vehicle";
        // $p4->pass_plate_num="OLD-342";
        // $p4->pass_purpose="Going to Guinness World Records Event";
        // $p4->pass_des="Robinsons Galleria";
        // $p4->pass_border="Bulacao";
        // $p4->pass_ingoing_or_outgoing=0;
        // $p4->save(); 

        

        // $p5 = new Passerby;

        // $p5->pass_first_name = "Shina";
        // $p5->pass_last_name = "Rodriguez";
        // $p5->pass_age= 54;
        // $p5->pass_id_type="Passport";
        // $p5->pass_id_num = "P6690244A";
        // $p5->pass_trans_mode = "Private Vehicle";
        // $p5->pass_plate_num="UDF-435";
        // $p5->pass_purpose="Its Harvesting Season";
        // $p5->pass_des="Bugo City";
        // $p5->pass_border="Kasambagan";
        // $p5->pass_ingoing_or_outgoing=1;
        // $p5->save(); 

        // $p6 = new Passerby;

        // $p6->pass_first_name = "Marijoy";
        // $p6->pass_last_name = "Abacan";
        // $p6->pass_age= 27;
        // $p6->pass_id_type="Passport";
        // $p6->pass_id_num = "P7701355A";
        // $p6->pass_trans_mode = "Private Vehicle";
        // $p6->pass_plate_num="YKT-367";
        // $p6->pass_purpose="Bartering Meetup";
        // $p6->pass_des="Landers";
        // $p6->pass_border="Lusaran";
        // $p6->pass_ingoing_or_outgoing=0;
        // $p6->save(); 

        // $p6 = new Passerby;

        // $p6->pass_first_name = "Timothy";
        // $p6->pass_last_name = "Sambrana";
        // $p6->pass_age= 42;
        // $p6->pass_id_type="Driver's License";
        // $p6->pass_id_num = "";
        // $p6->pass_trans_mode = "Private Vehicle";
        // $p6->pass_plate_num="GAM_333";
        // $p6->pass_purpose="Shopping";
        // $p6->pass_des="Robinsons Galleria";
        // $p6->pass_border="Tagbao";
        // $p6->pass_ingoing_or_outgoing=0;
        // $p6->save(); 

        // $p7 = new Passerby;

        // $p7->pass_first_name = "Lexi";
        // $p7->pass_last_name = "Ogtong";
        // $p7->pass_age= 22;
        // $p7->pass_id_type="Driver's License";
        // $p7->pass_id_num = "P8589123A";
        // $p7->pass_trans_mode = "Private Vehicle";
        // $p7->pass_plate_num="GAM_333";
        // $p7->pass_purpose="Shopping";
        // $p7->pass_des="Robinsons Galleria";
        // $p7->pass_border="Tagbao";
        // $p7->pass_ingoing_or_outgoing=0;
        // $p7->save(); 

        // $p7 = new Passerby;

        // $p7->pass_first_name = "Lexi";
        // $p7->pass_last_name = "Ogtong";
        // $p7->pass_age= 22;
        // $p7->pass_id_type="Driver's License";
        // $p7->pass_id_num = "P8589123A";
        // $p7->pass_trans_mode = "Private Vehicle";
        // $p7->pass_plate_num="GAM_333";
        // $p7->pass_purpose="Shopping";
        // $p7->pass_des="Robinsons Galleria";
        // $p7->pass_border="Tagbao";
        // $p7->pass_ingoing_or_outgoing=0;
        // $p7->save(); 

        // $p7 = new Passerby;

        // $p7->pass_first_name = "Lexi";
        // $p7->pass_last_name = "Ogtong";
        // $p7->pass_age= 22;
        // $p7->pass_id_type="Driver's License";
        // $p7->pass_id_num = "P8589123A";
        // $p7->pass_trans_mode = "Private Vehicle";
        // $p7->pass_plate_num="GAM_333";
        // $p7->pass_purpose="Shopping";
        // $p7->pass_des="Robinsons Galleria";
        // $p7->pass_border="Tagbao";
        // $p7->pass_ingoing_or_outgoing=0;
        // $p7->save(); 

        // $p7 = new Passerby;

        // $p7->pass_first_name = "Lexi";
        // $p7->pass_last_name = "Ogtong";
        // $p7->pass_age= 22;
        // $p7->pass_id_type="Driver's License";
        // $p7->pass_id_num = "P8589123A";
        // $p7->pass_trans_mode = "Private Vehicle";
        // $p7->pass_plate_num="GAM_333";
        // $p7->pass_purpose="Shopping";
        // $p7->pass_des="Robinsons Galleria";
        // $p7->pass_border="Tagbao";
        // $p7->pass_ingoing_or_outgoing=0;
        // $p7->save(); 

        // $p7 = new Passerby;

        // $p7->pass_first_name = "Lexi";
        // $p7->pass_last_name = "Ogtong";
        // $p7->pass_age= 22;
        // $p7->pass_id_type="Driver's License";
        // $p7->pass_id_num = "P8589123A";
        // $p7->pass_trans_mode = "Private Vehicle";
        // $p7->pass_plate_num="GAM_333";
        // $p7->pass_purpose="Shopping";
        // $p7->pass_des="Robinsons Galleria";
        // $p7->pass_border="Tagbao";
        // $p7->pass_ingoing_or_outgoing=0;
        // $p7->save(); 

        // $p7 = new Passerby;

        // $p7->pass_first_name = "Lexi";
        // $p7->pass_last_name = "Ogtong";
        // $p7->pass_age= 22;
        // $p7->pass_id_type="Driver's License";
        // $p7->pass_id_num = "P8589123A";
        // $p7->pass_trans_mode = "Private Vehicle";
        // $p7->pass_plate_num="GAM_333";
        // $p7->pass_purpose="Shopping";
        // $p7->pass_des="Robinsons Galleria";
        // $p7->pass_border="Tagbao";
        // $p7->pass_ingoing_or_outgoing=0;
        // $p7->save(); 

        // $p7 = new Passerby;

        // $p7->pass_first_name = "Lexi";
        // $p7->pass_last_name = "Ogtong";
        // $p7->pass_age= 22;
        // $p7->pass_id_type="Driver's License";
        // $p7->pass_id_num = "P8589123A";
        // $p7->pass_trans_mode = "Private Vehicle";
        // $p7->pass_plate_num="GAM_333";
        // $p7->pass_purpose="Shopping";
        // $p7->pass_des="Robinsons Galleria";
        // $p7->pass_border="Tagbao";
        // $p7->pass_ingoing_or_outgoing=0;
        // $p7->save(); 

        // $p7 = new Passerby;

        // $p7->pass_first_name = "Lexi";
        // $p7->pass_last_name = "Ogtong";
        // $p7->pass_age= 22;
        // $p7->pass_id_type="Driver's License";
        // $p7->pass_id_num = "P8589123A";
        // $p7->pass_trans_mode = "Private Vehicle";
        // $p7->pass_plate_num="GAM_333";
        // $p7->pass_purpose="Shopping";
        // $p7->pass_des="Robinsons Galleria";
        // $p7->pass_border="Tagbao";
        // $p7->pass_ingoing_or_outgoing=0;
        // $p7->save(); 

        // $p7 = new Passerby;

        // $p7->pass_first_name = "Lexi";
        // $p7->pass_last_name = "Ogtong";
        // $p7->pass_age= 22;
        // $p7->pass_id_type="Driver's License";
        // $p7->pass_id_num = "P8589123A";
        // $p7->pass_trans_mode = "Private Vehicle";
        // $p7->pass_plate_num="GAM_333";
        // $p7->pass_purpose="Shopping";
        // $p7->pass_des="Robinsons Galleria";
        // $p7->pass_border="Tagbao";
        // $p7->pass_ingoing_or_outgoing=0;
        // $p7->save(); 

        // $p7 = new Passerby;

        // $p7->pass_first_name = "Lexi";
        // $p7->pass_last_name = "Ogtong";
        // $p7->pass_age= 22;
        // $p7->pass_id_type="Driver's License";
        // $p7->pass_id_num = "P8589123A";
        // $p7->pass_trans_mode = "Private Vehicle";
        // $p7->pass_plate_num="GAM_333";
        // $p7->pass_purpose="Shopping";
        // $p7->pass_des="Robinsons Galleria";
        // $p7->pass_border="Tagbao";
        // $p7->pass_ingoing_or_outgoing=0;
        // $p7->save(); 

        // $p7 = new Passerby;

        // $p7->pass_first_name = "Lexi";
        // $p7->pass_last_name = "Ogtong";
        // $p7->pass_age= 22;
        // $p7->pass_id_type="Driver's License";
        // $p7->pass_id_num = "P8589123A";
        // $p7->pass_trans_mode = "Private Vehicle";
        // $p7->pass_plate_num="GAM_333";
        // $p7->pass_purpose="Shopping";
        // $p7->pass_des="Robinsons Galleria";
        // $p7->pass_border="Tagbao";
        // $p7->pass_ingoing_or_outgoing=0;
        // $p7->save(); 

        // $p7 = new Passerby;

        // $p7->pass_first_name = "Lexi";
        // $p7->pass_last_name = "Ogtong";
        // $p7->pass_age= 22;
        // $p7->pass_id_type="Driver's License";
        // $p7->pass_id_num = "P8589123A";
        // $p7->pass_trans_mode = "Private Vehicle";
        // $p7->pass_plate_num="GAM_333";
        // $p7->pass_purpose="Shopping";
        // $p7->pass_des="Robinsons Galleria";
        // $p7->pass_border="Tagbao";
        // $p7->pass_ingoing_or_outgoing=0;
        // $p7->save(); 

        // $p7 = new Passerby;

        // $p7->pass_first_name = "Lexi";
        // $p7->pass_last_name = "Ogtong";
        // $p7->pass_age= 22;
        // $p7->pass_id_type="Driver's License";
        // $p7->pass_id_num = "P8589123A";
        // $p7->pass_trans_mode = "Private Vehicle";
        // $p7->pass_plate_num="GAM_333";
        // $p7->pass_purpose="Shopping";
        // $p7->pass_des="Robinsons Galleria";
        // $p7->pass_border="Tagbao";
        // $p7->pass_ingoing_or_outgoing=0;
        // $p7->save(); 

        // $p7 = new Passerby;

        // $p7->pass_first_name = "Lexi";
        // $p7->pass_last_name = "Ogtong";
        // $p7->pass_age= 22;
        // $p7->pass_id_type="Driver's License";
        // $p7->pass_id_num = "P8589123A";
        // $p7->pass_trans_mode = "Private Vehicle";
        // $p7->pass_plate_num="GAM_333";
        // $p7->pass_purpose="Shopping";
        // $p7->pass_des="Robinsons Galleria";
        // $p7->pass_border="Tagbao";
        // $p7->pass_ingoing_or_outgoing=0;
        // $p7->save(); 

        // $p7 = new Passerby;

        // $p7->pass_first_name = "Lexi";
        // $p7->pass_last_name = "Ogtong";
        // $p7->pass_age= 22;
        // $p7->pass_id_type="Driver's License";
        // $p7->pass_id_num = "P8589123A";
        // $p7->pass_trans_mode = "Private Vehicle";
        // $p7->pass_plate_num="GAM_333";
        // $p7->pass_purpose="Shopping";
        // $p7->pass_des="Robinsons Galleria";
        // $p7->pass_border="Tagbao";
        // $p7->pass_ingoing_or_outgoing=0;
        // $p7->save(); 

        

        
    }
}
