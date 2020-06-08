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

        $p1->first_name = "Carlos";
        $p1->last_name = "Mendoza";
        $p1->age= 20;
        $p1->id_type="Driver's License";
        $p1->id_num = "G09-13-000478";
        $p1->trans_mode = "Private Vehicle";
        $p1->plate_num="XYZ-123";
        $p1->purpose="Going Home";
        $p1->destination="Holy Family Village";
        $p1->border_name="Osmena Bridge";
        $p1->direction=0;
        $p1->save(); 


        $p2 = new Passerby;

        $p2->first_name = "Carlos";
        $p2->last_name = "Mendoza";
        $p2->age= 20;
        $p2->id_type="Driver's License";
        $p2->id_num = "G09-13-000478";
        $p2->trans_mode = "Company Vehicle";
        $p2->plate_num="XYZ-123";
        $p2->purpose="Going To Work";
        $p2->destination="Daanbantayan";
        $p2->border_name="H. Abellana Street (Canduman-Talamban)";
        $p2->direction=1;
        $p2->save(); 

        $p3 = new Passerby;

        $p3->first_name = "Victor";
        $p3->last_name = "Lopez";
        $p3->age= 25;
        $p3->id_type="Passport";
        $p3->id_num = "P4274425A";
        $p3->trans_mode = "Walking";
        $p3->plate_num="-";
        $p3->purpose="Visiting Relatives";
        $p3->destination="Santo Nino Village";
        $p3->border_name="Tabunan";
        $p3->direction=0;
        $p3->save(); 

        $p4 = new Passerby;

        $p4->first_name = "Elizabeth";
        $p4->last_name = "Go";
        $p4->age= 119;
        $p4->id_type="Passport";
        $p4->id_num = "P5589123A";
        $p4->trans_mode = "Private Vehicle";
        $p4->plate_num="OLD-342";
        $p4->purpose="Going to Guinness World Records Event";
        $p4->destination="Robinsons Galleria";
        $p4->border_name="Bulacao";
        $p4->direction=0;
        $p4->save(); 

        

        $p5 = new Passerby;

        $p5->first_name = "Shina";
        $p5->last_name = "Rodriguez";
        $p5->age= 54;
        $p5->id_type="Passport";
        $p5->id_num = "P6690244A";
        $p5->trans_mode = "Private Vehicle";
        $p5->plate_num="UDF-435";
        $p5->purpose="Its Harvesting Season";
        $p5->destination="Bugo City";
        $p5->border_name="Kasambagan";
        $p5->direction=1;
        $p5->save(); 

        $p6 = new Passerby;

        $p6->first_name = "Marijoy";
        $p6->last_name = "Abacan";
        $p6->age= 27;
        $p6->id_type="Passport";
        $p6->id_num = "P7701355A";
        $p6->trans_mode = "Private Vehicle";
        $p6->plate_num="YKT-367";
        $p6->purpose="Bartering Meetup";
        $p6->destination="Landers";
        $p6->border_name="Lusaran";
        $p6->direction=0;
        $p6->save(); 

        $p7 = new Passerby;

        $p7->first_name = "Timothy";
        $p7->last_name = "Sambrana";
        $p7->age= 42;
        $p7->id_type="Driver's License";
        $p7->id_num = "G11-15-000932";
        $p7->trans_mode = "Private Vehicle";
        $p7->plate_num="GAM_333";
        $p7->purpose="Shopping";
        $p7->destination="Robinsons Galleria";
        $p7->border_name="Ouano Avenue (Cebu International Port)";
        $p7->direction=0;
        $p7->save();
        $p8 = new Passerby;

        $p8->first_name = "Lexi";
        $p8->last_name = "Ogtong";
        $p8->age= 22;
        $p8->id_type="Driver's License";
        $p8->id_num = "G03-04-001244";
        $p8->trans_mode = "Private Vehicle";
        $p8->plate_num="HFG-765";
        $p8->purpose="Shopping";
        $p8->destination="Robinsons Galleria";
        $p8->border_name="M.C. Briones Street (Subangdaku)";
        $p8->direction=0;
        $p8->save(); 

        $p9 = new Passerby;

        $p9->first_name = "Yasha";
        $p9->last_name = "Co";
        $p9->age= 22;
        $p9->id_type="Driver's License";
        $p9->id_num = "G12-16-001055";
        $p9->trans_mode = "Private Vehicle";
        $p9->plate_num="JKL-324";
        $p9->purpose="Going Home";
        $p9->destination="Sundance Residences";
        $p9->border_name="Sudlon II";
        $p9->direction=0;
        $p9->save(); 

        $p10 = new Passerby;

        $p10->first_name = "Brad";
        $p10->last_name = "Tabalanza";
        $p10->age= 24;
        $p10->id_type="Driver's License";
        $p10->id_num = "G14-18-001256";
        $p10->trans_mode = "Private Vehicle";
        $p10->plate_num="OLK-298";
        $p10->purpose="Band Practice";
        $p10->destination="Sound Monster Studios";
        $p10->border_name="Sudlon I";
        $p10->direction=0;
        $p10->save(); 

        $p11 = new Passerby;

        $p11->first_name = "Kyle";
        $p11->last_name = "Wang";
        $p11->age= 32;
        $p11->id_type="Driver's License";
        $p11->id_num = "G05-13-000478";
        $p11->trans_mode = "Private Vehicle";
        $p11->plate_num="YTJ-349";
        $p11->purpose="Business Meeting";
        $p11->destination="Starbucks";
        $p11->border_name="Tagbao";
        $p11->direction=0;
        $p11->save(); 

        $p12 = new Passerby;

        $p12->first_name = "Michelle";
        $p12->last_name = "Labay";
        $p12->age= 41;
        $p12->id_type="Driver's License";
        $p12->id_num = "G06-14-000589";
        $p12->trans_mode = "Private Vehicle";
        $p12->plate_num="EFG-543";
        $p12->purpose="Buying Food";
        $p12->destination="Robinsons Galleria";
        $p12->border_name="Sinsin";
        $p12->direction=0;
        $p12->save(); 

        $p13 = new Passerby;

        $p13->first_name = "Marc";
        $p13->last_name = "Lacan";
        $p13->age= 25;
        $p13->id_type="Driver's License";
        $p13->id_num = "G08-15-000690";
        $p13->trans_mode = "Private Vehicle";
        $p13->plate_num="TPO-455";
        $p13->purpose="Shopping";
        $p13->destination="Robinsons Galleria";
        $p13->border_name="Pamutan";
        $p13->direction=0;
        $p13->save(); 

        $p14 = new Passerby;

        $p14->first_name = "Karl";
        $p14->last_name = "Cruz";
        $p14->age= 35;
        $p14->id_type="Driver's License";
        $p14->id_num = "G07-16-000701";
        $p14->trans_mode = "Private Vehicle";
        $p14->plate_num="POI-477";
        $p14->purpose="Birthday";
        $p14->destination="Robinsons Galleria";
        $p14->border_name="Toong Pardo";
        $p14->direction=0;
        $p14->save(); 

        $p15 = new Passerby;

        $p15->first_name = "Janice";
        $p15->last_name = "Ong";
        $p15->age= 26;
        $p15->id_type="Driver's License";
        $p15->id_num = "G13-05-000819";
        $p15->trans_mode = "Private Vehicle";
        $p15->plate_num="YKG-894";
        $p15->purpose="Funeral";
        $p15->destination="Cemetary Park";
        $p15->border_name="Inayawan";
        $p15->direction=0;
        $p15->save(); 

        $p16 = new Passerby;

        $p16->first_name = "Omar";
        $p16->last_name = "Gabor";
        $p16->age= 20;
        $p16->id_type="Driver's License";
        $p16->id_num = "G05-09-000156";
        $p16->trans_mode = "Private Vehicle";
        $p16->plate_num="JHG-887";
        $p16->purpose="Shopping";
        $p16->destination="Robinsons Galleria";
        $p16->border_name="Mabolo";
        $p16->direction=0;
        $p16->save(); 

        $p17 = new Passerby;

        $p17->first_name = "Louis";
        $p17->last_name = "Ragasa";
        $p17->age= 34;
        $p17->id_type="Driver's License";
        $p17->id_num = "G07-14-000599";
        $p17->trans_mode = "Private Vehicle";
        $p17->plate_num="OJK-886";
        $p17->purpose="Shopping";
        $p17->destination="Robinsons Galleria";
        $p17->border_name="Banilad";
        $p17->direction=0;
        $p17->save(); 

        $p18 = new Passerby;

        $p18->first_name = "Joshua";
        $p18->last_name = "Cordova";
        $p18->age= 22;
        $p18->id_type="Driver's License";
        $p18->id_num = "G03-10-001328";
        $p18->trans_mode = "Private Vehicle";
        $p18->plate_num="PUJ-645";
        $p18->purpose="Shopping";
        $p18->destination="Robinsons Galleria";
        $p18->border_name="Talamban";
        $p18->direction=0;
        $p18->save(); 

        $p19 = new Passerby;

        $p19->first_name = "Gina";
        $p19->last_name = "Paasa";
        $p19->age= 22;
        $p19->id_type="Driver's License";
        $p19->id_num = "G08-16-001477";
        $p19->trans_mode = "Private Vehicle";
        $p19->plate_num="LOP-894";
        $p19->purpose="Shopping";
        $p19->destination="Robinsons Galleria";
        $p19->border_name="Bacayan";
        $p19->direction=0;
        $p19->save(); 

        $p20 = new Passerby;

        $p20->first_name = "Katherine";
        $p20->last_name = "Bernarda";
        $p20->age= 24;
        $p20->id_type="Passport";
        $p20->id_num = "P9690235A";
        $p20->trans_mode = "Walking";
        $p20->plate_num="-";
        $p20->purpose="Shopping";
        $p20->destination="Robinsons Galleria";
        $p20->border_name="Pit-os";
        $p20->direction=0;
        $p20->save(); 

        $p21 = new Passerby;

        $p21->first_name = "Tattoo";
        $p21->last_name = "Mann";
        $p21->age= 28;
        $p21->id_type="Driver's License";
        $p21->id_num = "G07-14-000233";
        $p21->trans_mode = "Private Vehicle";
        $p21->plate_num="INK-555";
        $p21->purpose="Shopping";
        $p21->destination="Robinsons Galleria";
        $p21->border_name="Binaliw";
        $p21->direction=0;
        $p21->save(); 
        
        $p22 = new Passerby;

        $p22->first_name = "Paul";
        $p22->last_name = "Mongo";
        $p22->age= 58;
        $p22->id_type="Driver's License";
        $p22->id_num = "G07-14-000321";
        $p22->trans_mode = "Private Vehicle";
        $p22->plate_num="YKB-808";
        $p22->purpose="Shopping";
        $p22->destination="Robinsons Galleria";
        $p22->border_name="Marcelo Fernan Bridge";
        $p22->direction=0;
        $p22->save(); 

        

        
    }
}
