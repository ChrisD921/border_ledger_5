<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnel;
class PersonnelController extends Controller
{
    public function index(){

        return view('/borderledger/index');
    }

    public function login(){
        return view('/borderLedger/login');
    }

    public function show(){
        //$personnel = Personnel::all();

        //Orders by whatever data you want... Adding "desc" reverses the order...
        //$personnel = Personnel::orderBy('last_name', 'desc')->get();

        //Gets only the rows that are equal to the given value or text
        //$personnel = Personnel::where('last_name','Bieber')->get();

        $personnel = Personnel::latest()->get();

        return view('/borderLedger/management', ['pers' => $personnel]);
    }


    public function store(){


        $personnel = new Personnel();

        $personnel->first_name = request('first_name');
        $personnel->last_name = request('last_name');
        $personnel->date_of_birth = request('date_of_birth');
        $personnel->password = request('password');

        $personnel->save();
        


        return redirect('/borderLedger/management')->with('success_msg' , 'New Personnel Account Successfully Created!');
    }
    public function ledger(){
        $passerby = new Passerby();

        $passerby->inputFName= request('inputFName');
        $passerby->inputLName= request('inputLName');
        $passerby->inputAge= request('inputAge');
        $passerby->inputIdType= request('inputIdType');
        $passerby->inputTransMode= request('inputTransMode');
        $passerby->inputPlateNum= request('inputPlateNum');
        $passerby->inputPurpose= request('inputPurpose');
        $passerby->inputDes= request('inputDes');
        

        $passerby->save();
        


        return redirect('/borderLedger/ledger')->with('success_msg' , 'New Passerby Entry Added!');



       // return view('/borderLedger/ledger');
    }

    public function profile(){
        return view('/borderLedger/profile');
    }

}
