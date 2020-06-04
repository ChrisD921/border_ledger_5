<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passerby;
use App\Border;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store()
    {
        $passerby = new Passerby();
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
        $passerby->pass_ingoing_or_outgoing = request('pass_ingoing_or_outgoing');
        $passerby->save();

        $border = new Border();
        $border->pass_border= request('pass_border');
        $border->save();


        return redirect('/ledger')->with('msg' , 'New Personnel Account Successfully Created!');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
