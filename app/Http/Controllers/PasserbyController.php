<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passerby;
use App\Border;
use App\Http\Requests\PasserbyStoreRequest;
class PasserbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    //This displays the page and allows the 
    //Passerby data to be viewed in pages. (Pagination)
    public function index() {
        $passerby = Passerby::paginate(20);
        return view('/borderLedger/ledger', compact('passerby'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(PasserbyStoreRequest $request)
    {
        $passerby = new Passerby();
        $border = new Border();

            if(request('pass_ingoing_or_outgoing')==0){
                $passerby->pass_first_name= request('pass_first_name');
                $passerby->pass_last_name= request('pass_last_name');
                $passerby->pass_age= request('pass_age');
                $passerby->pass_id_type= request('pass_id_type');
                $passerby->pass_id_num= request('pass_id_num');
                $passerby->pass_trans_mode= request('pass_trans_mode');
                $passerby->pass_plate_num= request('pass_plate_num');
                $passerby->pass_purpose= request('pass_purpose');
                $passerby->pass_des= request('pass_des');

                $passerby->pass_border = request('pass_border');
                

                $border = new Border();
                $border->pass_border= request('pass_border');
            }else{
                $passerby->pass_first_name= request('pass_first_name_out');
                $passerby->pass_last_name= request('pass_last_name_out');
                $passerby->pass_age= request('pass_age_out');
                $passerby->pass_id_type= request('pass_id_type_out');
                $passerby->pass_id_num= request('pass_id_num_out');
                $passerby->pass_trans_mode= request('pass_trans_mode_out');
                $passerby->pass_plate_num= request('pass_plate_num_out');
                $passerby->pass_purpose= request('pass_purpose_out');
                $passerby->pass_des= request('pass_des_out');

                $passerby->pass_border = request('pass_border_out');
                

                
                $border->pass_border= request('pass_border_out');

            }
        $passerby->pass_ingoing_or_outgoing = request('pass_ingoing_or_outgoing');
        $passerby->save();
        $border->save();
        
        return redirect('/ledger')->with('msg' , 'New Passerby Account Successfully Created!');
    }

    /* AJAX request */
    public function getBorderNames(Request $request) {
        $search = $request->search;

        if($search == ''){
            $borders = Passerby::orderby('pass_border','asc')
                        ->select('id', 'pass_border')
                        ->get();
        }else{
            $borders = Passerby::orderby('pass_border','asc')
                        ->select('id', 'pass_border')
                        ->where('pass_border','like','%'.$search.'%')
                        ->get();
        }

        $response = array();
        foreach($borders as $border){
            $response[] = array(
                "id"=>$border->pass_border,
                "text"=>$border->pass_border
            );
        }


        echo json_encode($response);
        exit;
    }
}
