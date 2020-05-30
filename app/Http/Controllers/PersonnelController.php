<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnel;
use App\User;

class PersonnelController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function indexhome(){

        return view('/index');
    }


    public function index() {
        $personnel = Personnel::paginate(5);
        return view('/management', compact('personnel'));
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
        $personnel->email = request('email');
        $personnel->password = request('password');

        $personnel->save();
        


        return redirect('/borderLedger/management')->with('success_msg' , 'New Personnel Account Successfully Created!');
    }

    public function profile(){
        
        //Finds the id of the current Personnel/User and then grabs that row and places it in the array of data below to display in the Profile.
        $personnel =Personnel::findOrFail(auth()->user()->id);
        

        return view('/borderLedger/profile',['personnel' => $personnel] );
    }

    public function destroy($id){
        $personnel = Personnel::findOrFail($id);
        $personnel->delete();

        return redirect('/borderLedger/management');

    }

}
