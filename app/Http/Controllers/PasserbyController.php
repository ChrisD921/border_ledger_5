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

            if(request('direction')==0){
                $passerby->first_name= request('first_name');
                $passerby->last_name= request('last_name');
                $passerby->age= request('age');
                $passerby->id_type= request('id_type');
                $passerby->id_num= request('id_num');
                $passerby->trans_mode= request('trans_mode');
                $passerby->plate_num= request('plate_num');
                $passerby->purpose= request('purpose');
                $passerby->destination= request('destination');

                $passerby->border_name = request('border_name');
                

                $border = new Border();
                $border->border_name= request('border_name');
            }else{
                $passerby->first_name= request('first_name_out');
                $passerby->last_name= request('last_name_out');
                $passerby->age= request('age_out');
                $passerby->id_type= request('id_type_out');
                $passerby->id_num= request('id_num_out');
                $passerby->trans_mode= request('trans_mode_out');
                $passerby->plate_num= request('plate_num_out');
                $passerby->purpose= request('purpose_out');
                $passerby->destination= request('destination_out');




                $passerby->border_name = request('border_name_out');
                

                
                $border->border_name= request('border_name_out');

            }
        $passerby->direction = request('direction');
        $passerby->save();
        $border->save();
        
        return redirect('/ledger')->with('msg' , 'New Passerby Entry Successfully Created!');
    }

    /* AJAX request */
    public function getBorderNames(Request $request) {
        $search = $request->search;

        if($search == ''){
            $borders = Passerby::orderby('border_name','asc')
                        ->select('id', 'border_name')
                        ->get();
        }else{
            $borders = Passerby::orderby('border_name','asc')
                        ->select('id', 'border_name')
                        ->where('border_name','like','%'.$search.'%')
                        ->get();
        }

        $response = array();
        foreach($borders as $border){
            $response[] = array(
                "id"=>$border->border_name,
                "text"=>$border->border_name
            );
        }


        echo json_encode($response);
        exit;
    }
}
