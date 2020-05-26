<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passerby;
class PasserbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //This displays the page and allows the 
    //Passerby data to be viewed in pages. (Pagination)
    public function index() {
        $passerby = Passerby::paginate(5);
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

        $passerby->inputFName= request('inputFName');
        $passerby->inputLName= request('inputLName');
        $passerby->inputAge= request('inputAge');
        $passerby->inputIdType= request('inputIdType');
        $passerby->inputTransMode= request('inputTransMode');
        $passerby->inputPlateNum= request('inputPlateNum');
        $passerby->inputPurpose= request('inputPurpose');
        $passerby->inputDes= request('inputDes');
        // $passerby->inputBorder = request('inputBorder');
        $passerby->IngoingOrOutgoing = request('IngoingOrOutgoing');
        

        $passerby->save();
        


        return redirect('/borderLedger/ledger')->with('success_msg' , 'New Personnel Account Successfully Created!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        //$passerby = Passerby::latest()->get();

        //return view('/borderLedger/ledger', ['pass' => $passerby]);
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

    // public function ledger(){
    //     return view('/borderLedger/ledger');
    // }
    // public function profile(){
    //     return view('/borderLedger/profile');
    // }
}
