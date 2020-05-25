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

    public function admin(){
        //$personnel = Personnel::all();

        //Orders by whatever data you want... Adding "desc" reverses the order...
        //$personnel = Personnel::orderBy('last_name', 'desc')->get();

        //Gets only the rows that are equal to the given value or text
        //$personnel = Personnel::where('last_name','Bieber')->get();

        $personnel = Personnel::latest()->get();

        return view('/borderLedger/management', ['pers' => $personnel]);
    }

    public function ledger(){
        return view('/borderLedger/ledger');
    }

    public function profile(){
        return view('/borderLedger/profile');
    }

}
