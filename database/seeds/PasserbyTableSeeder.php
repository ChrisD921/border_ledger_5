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
        $p1->pass_id_num = "G09-13-000478";
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
        $p2->pass_id_num = "G09-13-000478";
        $p2->pass_trans_mode = "Company Vehicle";
        $p2->pass_plate_num="XYZ-123";
        $p2->pass_purpose="Going To Work";
        $p2->pass_des="Daanbantayan";
        $p2->pass_border="H. Abellana Street (Canduman-Talamban)";
        $p2->pass_ingoing_or_outgoing=1;
        $p2->save(); 

        $p3 = new Passerby;

        $p3->pass_first_name = "Victor";
        $p3->pass_last_name = "Lopez";
        $p3->pass_age= 25;
        $p3->pass_id_type="Passport";
        $p3->pass_id_num = "P4274425A";
        $p3->pass_trans_mode = "Walking";
        $p3->pass_plate_num="-";
        $p3->pass_purpose="Visiting Relatives";
        $p3->pass_des="Santo Nino Village";
        $p3->pass_border="Tabunan";
        $p3->pass_ingoing_or_outgoing=0;
        $p3->save(); 

        $p4 = new Passerby;

        $p4->pass_first_name = "Elizabeth";
        $p4->pass_last_name = "Go";
        $p4->pass_age= 119;
        $p4->pass_id_type="Passport";
        $p4->pass_id_num = "P5589123A";
        $p4->pass_trans_mode = "Private Vehicle";
        $p4->pass_plate_num="OLD-342";
        $p4->pass_purpose="Going to Guinness World Records Event";
        $p4->pass_des="Robinsons Galleria";
        $p4->pass_border="Bulacao";
        $p4->pass_ingoing_or_outgoing=0;
        $p4->save(); 

        

        $p5 = new Passerby;

        $p5->pass_first_name = "Shina";
        $p5->pass_last_name = "Rodriguez";
        $p5->pass_age= 54;
        $p5->pass_id_type="Passport";
        $p5->pass_id_num = "P6690244A";
        $p5->pass_trans_mode = "Private Vehicle";
        $p5->pass_plate_num="UDF-435";
        $p5->pass_purpose="Its Harvesting Season";
        $p5->pass_des="Bugo City";
        $p5->pass_border="Kasambagan";
        $p5->pass_ingoing_or_outgoing=1;
        $p5->save(); 

        $p6 = new Passerby;

        $p6->pass_first_name = "Marijoy";
        $p6->pass_last_name = "Abacan";
        $p6->pass_age= 27;
        $p6->pass_id_type="Passport";
        $p6->pass_id_num = "P7701355A";
        $p6->pass_trans_mode = "Private Vehicle";
        $p6->pass_plate_num="YKT-367";
        $p6->pass_purpose="Bartering Meetup";
        $p6->pass_des="Landers";
        $p6->pass_border="Lusaran";
        $p6->pass_ingoing_or_outgoing=0;
        $p6->save(); 

        $p7 = new Passerby;

        $p7->pass_first_name = "Timothy";
        $p7->pass_last_name = "Sambrana";
        $p7->pass_age= 42;
        $p7->pass_id_type="Driver's License";
        $p7->pass_id_num = "G11-15-000932";
        $p7->pass_trans_mode = "Private Vehicle";
        $p7->pass_plate_num="GAM_333";
        $p7->pass_purpose="Shopping";
        $p7->pass_des="Robinsons Galleria";
        $p7->pass_border="Tagbao";
        $p7->pass_ingoing_or_outgoing=0;
        $p7->save();
        $p8 = new Passerby;

        $p8->pass_first_name = "Lexi";
        $p8->pass_last_name = "Ogtong";
        $p8->pass_age= 22;
        $p8->pass_id_type="Driver's License";
        $p8->pass_id_num = "G03-04-001244";
        $p8->pass_trans_mode = "Private Vehicle";
        $p8->pass_plate_num="HFG-765";
        $p8->pass_purpose="Shopping";
        $p8->pass_des="Robinsons Galleria";
        $p8->pass_border="Tabunan";
        $p8->pass_ingoing_or_outgoing=0;
        $p8->save(); 

        $p9 = new Passerby;

        $p9->pass_first_name = "Yasha";
        $p9->pass_last_name = "Co";
        $p9->pass_age= 22;
        $p9->pass_id_type="Driver's License";
        $p9->pass_id_num = "G12-16-001055";
        $p9->pass_trans_mode = "Private Vehicle";
        $p9->pass_plate_num="JKL-324";
        $p9->pass_purpose="Going Home";
        $p9->pass_des="Sundance Residences";
        $p9->pass_border="Sudlon II";
        $p9->pass_ingoing_or_outgoing=0;
        $p9->save(); 

        $p10 = new Passerby;

        $p10->pass_first_name = "Brad";
        $p10->pass_last_name = "Tabalanza";
        $p10->pass_age= 24;
        $p10->pass_id_type="Driver's License";
        $p10->pass_id_num = "G14-18-001256";
        $p10->pass_trans_mode = "Private Vehicle";
        $p10->pass_plate_num="OLK-298";
        $p10->pass_purpose="Band Practice";
        $p10->pass_des="Sound Monster Studios";
        $p10->pass_border="Sudlon I";
        $p10->pass_ingoing_or_outgoing=0;
        $p10->save(); 

        $p11 = new Passerby;

        $p11->pass_first_name = "Kyle";
        $p11->pass_last_name = "Wang";
        $p11->pass_age= 32;
        $p11->pass_id_type="Driver's License";
        $p11->pass_id_num = "G05-13-000478";
        $p11->pass_trans_mode = "Private Vehicle";
        $p11->pass_plate_num="YTJ-349";
        $p11->pass_purpose="Business Meeting";
        $p11->pass_des="Starbucks";
        $p11->pass_border="Tagbao";
        $p11->pass_ingoing_or_outgoing=0;
        $p11->save(); 

        $p12 = new Passerby;

        $p12->pass_first_name = "Michelle";
        $p12->pass_last_name = "Labay";
        $p12->pass_age= 41;
        $p12->pass_id_type="Driver's License";
        $p12->pass_id_num = "G06-14-000589";
        $p12->pass_trans_mode = "Private Vehicle";
        $p12->pass_plate_num="EFG-543";
        $p12->pass_purpose="Buying Food";
        $p12->pass_des="Robinsons Galleria";
        $p12->pass_border="Sinsin";
        $p12->pass_ingoing_or_outgoing=0;
        $p12->save(); 

        $p13 = new Passerby;

        $p13->pass_first_name = "Marc";
        $p13->pass_last_name = "Lacan";
        $p13->pass_age= 25;
        $p13->pass_id_type="Driver's License";
        $p13->pass_id_num = "G08-15-000690";
        $p13->pass_trans_mode = "Private Vehicle";
        $p13->pass_plate_num="TPO-455";
        $p13->pass_purpose="Shopping";
        $p13->pass_des="Robinsons Galleria";
        $p13->pass_border="Pamutan";
        $p13->pass_ingoing_or_outgoing=0;
        $p13->save(); 

        $p14 = new Passerby;

        $p14->pass_first_name = "Karl";
        $p14->pass_last_name = "Cruz";
        $p14->pass_age= 35;
        $p14->pass_id_type="Driver's License";
        $p14->pass_id_num = "G07-16-000701";
        $p14->pass_trans_mode = "Private Vehicle";
        $p14->pass_plate_num="POI-477";
        $p14->pass_purpose="Birthday";
        $p14->pass_des="Robinsons Galleria";
        $p14->pass_border="Toong Pardo";
        $p14->pass_ingoing_or_outgoing=0;
        $p14->save(); 

        $p15 = new Passerby;

        $p15->pass_first_name = "Janice";
        $p15->pass_last_name = "Ong";
        $p15->pass_age= 26;
        $p15->pass_id_type="Driver's License";
        $p15->pass_id_num = "G13-05-000819";
        $p15->pass_trans_mode = "Private Vehicle";
        $p15->pass_plate_num="YKG-894";
        $p15->pass_purpose="Funeral";
        $p15->pass_des="Cemetary Park";
        $p15->pass_border="Inayawan";
        $p15->pass_ingoing_or_outgoing=0;
        $p15->save(); 

        $p16 = new Passerby;

        $p16->pass_first_name = "Omar";
        $p16->pass_last_name = "Gabor";
        $p16->pass_age= 20;
        $p16->pass_id_type="Driver's License";
        $p16->pass_id_num = "G05-09-000156";
        $p16->pass_trans_mode = "Private Vehicle";
        $p16->pass_plate_num="JHG-887";
        $p16->pass_purpose="Shopping";
        $p16->pass_des="Robinsons Galleria";
        $p16->pass_border="Mabolo";
        $p16->pass_ingoing_or_outgoing=0;
        $p16->save(); 

        $p17 = new Passerby;

        $p17->pass_first_name = "Louis";
        $p17->pass_last_name = "Ragasa";
        $p17->pass_age= 34;
        $p17->pass_id_type="Driver's License";
        $p17->pass_id_num = "G07-14-000599";
        $p17->pass_trans_mode = "Private Vehicle";
        $p17->pass_plate_num="OJK-886";
        $p17->pass_purpose="Shopping";
        $p17->pass_des="Robinsons Galleria";
        $p17->pass_border="Banilad";
        $p17->pass_ingoing_or_outgoing=0;
        $p17->save(); 

        $p18 = new Passerby;

        $p18->pass_first_name = "Joshua";
        $p18->pass_last_name = "Cordova";
        $p18->pass_age= 22;
        $p18->pass_id_type="Driver's License";
        $p18->pass_id_num = "G03-10-001328";
        $p18->pass_trans_mode = "Private Vehicle";
        $p18->pass_plate_num="PUJ-645";
        $p18->pass_purpose="Shopping";
        $p18->pass_des="Robinsons Galleria";
        $p18->pass_border="Talamban";
        $p18->pass_ingoing_or_outgoing=0;
        $p18->save(); 

        $p19 = new Passerby;

        $p19->pass_first_name = "Gina";
        $p19->pass_last_name = "Paasa";
        $p19->pass_age= 22;
        $p19->pass_id_type="Driver's License";
        $p19->pass_id_num = "G08-16-001477";
        $p19->pass_trans_mode = "Private Vehicle";
        $p19->pass_plate_num="LOP-894";
        $p19->pass_purpose="Shopping";
        $p19->pass_des="Robinsons Galleria";
        $p19->pass_border="Bacayan";
        $p19->pass_ingoing_or_outgoing=0;
        $p19->save(); 

        $p20 = new Passerby;

        $p20->pass_first_name = "Katherine";
        $p20->pass_last_name = "Bernarda";
        $p20->pass_age= 24;
        $p20->pass_id_type="Passport";
        $p20->pass_id_num = "P9690235A";
        $p20->pass_trans_mode = "Walking";
        $p20->pass_plate_num="-";
        $p20->pass_purpose="Shopping";
        $p20->pass_des="Robinsons Galleria";
        $p20->pass_border="Pit-os";
        $p20->pass_ingoing_or_outgoing=0;
        $p20->save(); 

        $p21 = new Passerby;

        $p21->pass_first_name = "Tattoo";
        $p21->pass_last_name = "Mann";
        $p21->pass_age= 28;
        $p21->pass_id_type="Driver's License";
        $p21->pass_id_num = "G07-14-000233";
        $p21->pass_trans_mode = "Private Vehicle";
        $p21->pass_plate_num="INK-555";
        $p21->pass_purpose="Shopping";
        $p21->pass_des="Robinsons Galleria";
        $p21->pass_border="Binaliw";
        $p21->pass_ingoing_or_outgoing=0;
        $p21->save(); 
        
        $p22 = new Passerby;

        $p22->pass_first_name = "Paul";
        $p22->pass_last_name = "Mongo";
        $p22->pass_age= 58;
        $p22->pass_id_type="Driver's License";
        $p22->pass_id_num = "G07-14-000321";
        $p22->pass_trans_mode = "Private Vehicle";
        $p22->pass_plate_num="YKB-808";
        $p22->pass_purpose="Shopping";
        $p22->pass_des="Robinsons Galleria";
        $p22->pass_border="Marcelo Fernan Bridge";
        $p22->pass_ingoing_or_outgoing=0;
        $p22->save(); 

        

        
    }
}
