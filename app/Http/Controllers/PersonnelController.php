<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnel;
class PersonnelController extends Controller
{
    public function indexhome(){

        return view('/borderledger/index');
    }


    public function index() {
        $personnel = Personnel::paginate(5);
        return view('/borderLedger/management', compact('personnel'));
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

    public function profile(){
        return view('/borderLedger/profile');
    }

}
